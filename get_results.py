import boto3
import pickle
import xmltodict
import numpy as np
import pandas as pd
from get_creds import *

def get_hit_answer(mturk,hit_id):

    """
    Returns a dictionary the worker ID with the answer(s) that the worker provided
    for the given hit ID
    """

    worker_results = mturk.list_assignments_for_hit(HITId=hit_id, AssignmentStatuses=['Approved'])
    print(worker_results)
    print('Results for HIT ID : {}'.format(hit_id))
    #Dictionary to maintain a mapping between worker ID and answers provided by that worker
    worker_answer_dict = {}
    worker_time_dict = {}
    for assignment in worker_results['Assignments']: # Each "assignment" is again a dictionary with the answer value stored against "Answer" key
        answer_dict = xmltodict.parse(assignment['Answer'])
        single_worker_answers = []
        for answer_field in answer_dict['QuestionFormAnswers']['Answer']:
            single_worker_answers.append(answer_field['FreeText'])
        worker_answer_dict[assignment['WorkerId']] = single_worker_answers
        worker_time_dict[assignment['WorkerId']] = assignment['SubmitTime']
    return worker_answer_dict,worker_time_dict

def generate_result_table(hit_dict,hit_answer,hit_time):
    """
    Generates a result table from the generated answers
    This result table will be processed to generate the similarity label

    """
    result = []
    # Fill in input rows
    for hit_id in hit_answer:
        for user in hit_answer[hit_id]:
            for answer,question in zip(hit_answer[hit_id][user],hit_dict[hit_id]):
                single_row = []
                single_row.append(hit_id)
                single_row.append(user)
                single_row.append(hit_time[hit_id][user])
                for image_url in question:
                    single_row.append(image_url)
                single_row.append(answer)
                result.append(single_row)

    result = np.asarray(result)
    df = pd.DataFrame(data=result,columns = ['HIT ID','Worker ID','TimeStamp','Original Image','Generated Image 1','Generated Image 2','Answer'])
    return df



if __name__ == '__main__':

    MTURK_SANDBOX = 'https://mturk-requester-sandbox.us-east-1.amazonaws.com'
    access_key,secret_access_key = get_creds('credentials.csv')

    mturk = boto3.client('mturk',
       aws_access_key_id = access_key,
       aws_secret_access_key = secret_access_key,
       region_name='us-east-1',
       #endpoint_url = MTURK_SANDBOX
    )

    with open('hit_dict.pkl','rb') as f:
        hit_dict = pickle.load(f)

    hit_answer = {}
    hit_time = {}
    for hit_id in hit_dict:
        hit_answer[hit_id],hit_time[hit_id] = get_hit_answer(mturk = mturk, hit_id = hit_id)

    df = generate_result_table(hit_dict,hit_answer,hit_time)
    # Save as CSV
    df.to_csv('results_live.csv')






