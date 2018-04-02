import boto3
import pickle
import xmltodict
import numpy as np
import pandas as pd
from get_creds import *

def get_hit_answer(mturk,hit_id,hit_dict):

    """
    Returns a dictionary the worker ID with the answer(s) that the worker provided
    for the given hit ID
    """

    worker_results = mturk.list_assignments_for_hit(HITId=hit_id, AssignmentStatuses=['Submitted'])
    print('Results for HIT ID : {}.Num of assignments : {}'.format(hit_id,len(worker_results['Assignments'])))
    #Dictionary to maintain a mapping between worker ID and answers provided by that worker
    worker_time_dict = {}
    worker_dict = {}
    for assignment in worker_results['Assignments']: # Each "assignment" is again a dictionary with the answer value stored against "Answer" key
        answer_dict = xmltodict.parse(assignment['Answer'])
        single_worker_answers = []
        for answer_field in answer_dict['QuestionFormAnswers']['Answer']:
            single_worker_answers.append(answer_field['FreeText'])
        worker_time_dict[assignment['WorkerId']] = assignment['SubmitTime']
        # Match answers with questions -- Account for misalignment of reported answers !!
        ques_ans_dict = {}
        for question,idx in zip(hit_dict[hit_id],range(len(hit_dict[hit_id]))):
            if idx < len(single_worker_answers):
                if single_worker_answers[idx] != question[1] and single_worker_answers[idx] != question[2] and single_worker_answers[idx] != 'Unsure':
                    try:
                        correct_index = single_worker_answers.index(question[1])
                    except ValueError:
                        try:
                            correct_index = single_worker_answers.index(question[2])
                        except ValueError:
                            correct_index = None
                    if correct_index is not None:
                        ques_ans_dict[tuple(question)] = single_worker_answers[correct_index]
                else:
                    ques_ans_dict[tuple(question)] = single_worker_answers[idx]
            else:
                try:
                    correct_index = single_worker_answers.index(question[1])
                except ValueError:
                    try:
                        correct_index = single_worker_answers.index(question[2])
                    except ValueError: # Either not answered or its "Unsure"
                        correct_index = None
                    if correct_index is not None:
                        ques_ans_dict[tuple(question)] = single_worker_answers[correct_index]

        worker_dict[assignment['WorkerId']] = ques_ans_dict
    return worker_dict,worker_time_dict



def generate_result_table(hit_dict,hit_answer,hit_time):
    """
    Generates a result table from the generated answers
    This result table will be processed to generate the similarity label

    """
    result = []
    # Fill in input rows
    for hit_id in hit_answer:
        for user in hit_answer[hit_id]:
            for question,answer in hit_answer[hit_id][user].items():
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
    if results_sanity_check(df) is True:
        print('Number of responses (total) : {}'.format(df.shape[0]))
        return df
    else:
        return None



def results_sanity_check(df):
    """
    Function to check if answers in row are acceptable i.e.
    conform to one of the 3 choices from the question.

    """
    for image1,image2,answer in zip(df['Generated Image 1'],df['Generated Image 2'],df['Answer']):
        if answer != image1 and answer != image2 and answer != 'Unsure':
            print('Mismatch Detected')
            return False
        else:
            return True

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
        hit_answer[hit_id],hit_time[hit_id] = get_hit_answer(mturk = mturk, hit_id = hit_id, hit_dict = hit_dict)

    df = generate_result_table(hit_dict,hit_answer,hit_time)
    # Save as CSV
    if df is not None:
        df.to_csv('results_fixed.csv')






