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


def get_assignments():
    with open('hit_list.txt','r') as f:
        ids = f.readlines()
    hits = [x.strip() for x in ids]

    matrix = []
    for hit,idx in zip(hits,range(len(hits))):
        response = mturk.list_assignments_for_hit(HITId = hit)
        for assignment in response['Assignments']:
            if assignment['SubmitTime'].month != 4: # Discard some old HITs from January
                continue
            print('HIT ID : {} Assignment ID : {} Submit Time : {} Status : {}'.format(hit,assignment['AssignmentId'],assignment['SubmitTime'],assignment['AssignmentStatus']))
            answer_dict = xmltodict.parse(assignment['Answer'])
            for answer_field in answer_dict['QuestionFormAnswers']['Answer']:
                if type(answer_field) == str: # HACK !
                    print('Weird parsing for HIT ID : {} Assignment ID : {}'.format(hit,assignment['AssignmentId']))
                    continue
                row = []
                row.append(hit)
                row.append(assignment['AssignmentId'])
                row.append(assignment['WorkerId'])
                row.append(assignment['SubmitTime'])
                row.append(answer_field['QuestionIdentifier'])
                row.append(answer_field['FreeText'])
                matrix.append(row)
    return matrix


def create_table(matrix):
    matrix = np.asarray(matrix)
    df = pd.DataFrame(data=matrix,columns = ['HIT ID','Assignment ID','Worker ID','TimeStamp','Original Image','Winner'])
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
    matrix = get_assignments()
    create_table(matrix)

