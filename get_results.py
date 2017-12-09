import boto3
import pickle
import xmltodict



def get_hit_answer(mturk,hit_id):

    """
    Returns a dictionary the worker ID with the answer(s) that the worker provided
    for the given hit ID
    """

    worker_results = mturk.list_assignments_for_hit(HITId=hit_id, AssignmentStatuses=['Submitted'])
    print('Results for HIT ID : {}'.format(hit_id))
    #Dictionary to maintain a mapping between worker ID and answers provided by that worker
    worker_answer_dict = {}
    for assignment in worker_results['Assignments']: # Each "assignment" is again a dictionary with the answer value stored against "Answer" key
        answer_dict = xmltodict.parse(assignment['Answer'])
        single_worker_answers = []
        for answer_field in answer_dict['QuestionFormAnswers']['Answer']:
            single_worker_answers.append(answer_field['FreeText'])
        worker_answer_dict[assignment['WorkerId']] = single_worker_answers
    return worker_answer_dict


if __name__ == '__main__':

    MTURK_SANDBOX = 'https://mturk-requester-sandbox.us-east-1.amazonaws.com'
    mturk = boto3.client('mturk',
       aws_access_key_id = "AKIAI4DQ22LGP4HC3X4Q",
       aws_secret_access_key = "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",
       region_name='us-east-1',
       endpoint_url = MTURK_SANDBOX
    )

    with open('hit_dict.pkl','rb') as f:
        hit_dict = pickle.load(f)

    hit_answer = {}
    for hit_id in hit_dict:
        hit_answer[hit_id] = get_hit_answer(mturk = mturk, hit_id = hit_id)

    print(hit_answer)




