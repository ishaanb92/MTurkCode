#!/usr/bin/env python3
import boto3
import pickle
import generate_question
from get_creds import *
import sys
import numpy as np
import xmltodict

access_key,secret_access_key = get_creds('credentials.csv')

mturk = boto3.client('mturk',
                    aws_access_key_id = access_key,
                    aws_secret_access_key = secret_access_key,
                    region_name='us-east-1',
                    )

models = ['dcgan','dragan','dcgan-gp','wgan','wgan-gp','dcgan-cons']

def get_model_name(answer):
    """
    Extract model name string from answer URL

    """
    return answer.split('/')[-1].split('.')[0]

def find_pair_for_hit(response):
    models_list = []
    for assignment in response['Assignments']:
        if assignment['SubmitTime'].month != 4: # Discard some old HITs from January
            continue
        answer_dict = xmltodict.parse(assignment['Answer'])
        # Extract Q and A from the parsed XML
        questions_and_answers = answer_dict['QuestionFormAnswers']['Answer']
        for answer_field in questions_and_answers:
            if type(answer_field) == str: # HACK !
                continue
            mname = get_model_name(answer_field['FreeText'])
            if mname in models:
                models_list.append(mname)
    models_list = list(set(models_list))

    return models_list




def create_matrix():
    with open('hit_list.txt','r') as f:
        ids = f.readlines()
    hits = [x.strip() for x in ids]

    matrix = []
    missing_pairs = 0
    for hit,idx in zip(hits,range(len(hits))):
        response = mturk.list_assignments_for_hit(HITId = hit)
        # Find the pair being considered for this HIT
        models_in_hit = find_pair_for_hit(response = response)
        if len(models_in_hit) !=2 :
            print('Complete pair not found : {} HIT ID : {}'.format(models_in_hit,hit))
            missing_pairs += 1
            continue # Drop the HIT

        for assignment in response['Assignments']:
            if assignment['SubmitTime'].month != 4: # Discard some old HITs from January
                continue
            print('HIT ID : {} Assignment ID : {} Submit Time : {} Status : {}'.format(hit,assignment['AssignmentId'],assignment['SubmitTime'],assignment['AssignmentStatus']))
            answer_dict = xmltodict.parse(assignment['Answer'])
            # Extract Q and A from the parsed XML
            questions_and_answers = answer_dict['QuestionFormAnswers']['Answer']
            for answer_field in questions_and_answers:
                if type(answer_field) == str: # HACK !
                    print('Weird parsing for HIT ID : {} Assignment ID : {}'.format(assignment['HITId'],assignment['AssignmentId']))
                    continue
                row = []
                row.append(assignment['HITId'])
                row.append(assignment['AssignmentId'])
                row.append(assignment['WorkerId'])
                row.append(assignment['SubmitTime'])
                row.append(answer_field['QuestionIdentifier'])
                for model in models_in_hit:
                    row.append(model)
                if answer_field['FreeText'] != 'Unsure':
                    row.append(get_model_name(answer_field['FreeText']))
                else:
                    row.append(answer_field['FreeText'])
                if len(row) != 8:
                    print(row)
                matrix.append(row)

    print('Pairs not found for {} HITs'.format(missing_pairs))
    return matrix



def create_table():
    """
    Top-Level function to create CSV from responses

    """
    matrix = create_matrix()

    matrix = np.asarray(matrix)

    df = pd.DataFrame(data=matrix,columns = ['HIT ID','Assignment ID','Worker ID','TimeStamp','Original Image','Model 1','Model 2','Winner'])
    df.to_csv('celebA_results.csv')

def get_hits():
    hit_dict = mturk.list_hits(MaxResults=100)
    nextToken = hit_dict['NextToken']
    for hit in hit_dict['HITs']:
        hit_id = hit['HITId']
        print('Deleting HIT : {}'.format(hit_id))
        mturk.delete_hit(HITId = str(hit_id))

    hit_dict = {}

    while True:
        hit_dict = mturk.list_hits(NextToken=nextToken,MaxResults=100)
        for hit in hit_dict['HITs']:
            hit_id = hit['HITId']
            print('Deleting HIT : {}'.format(hit_id))
            mturk.delete_hit(HITId = str(hit_id))
        try:
            nextToken = hit_dict['NextToken']
        except KeyError:
            break
        hit_dict = {}

if __name__ == '__main__':
    create_table()
