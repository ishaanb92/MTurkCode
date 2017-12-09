#!/usr/bin/env python3
import boto3
import pickle
import generate_question

def create_hit(mturk,question):
    """
    Creates a single HIT using the MTurk object and the supplied XML-HTML question form
    Returns the ID of the created HIT

    """

    new_hit = mturk.create_hit(
        Title = 'Finding similar images',
        Description = 'Given are sets of 3 images, select which image looks more like the original image',
        Keywords = 'text, quick, labeling',
        Reward = '0.01',
        MaxAssignments = 1,
        LifetimeInSeconds = 172800,
        AssignmentDurationInSeconds = 600,
        AutoApprovalDelayInSeconds = 14400,
        Question = question
    )

    return new_hit['HIT']

def create_question(url_struct,question_num,num_images,pair_num):
    """
    Creates HTML (with XML wrapper) question form needed for a single HIT
    question_num : 0 - 500 (images) [row index in URL struct]
    num_images : Number of images in a single HIT, programmable 1-N
    pair_num : 1 - 9, index for each generated pair of the original image [coloumn in URL struct]

    """
    merged_questions = ""
    images_per_hit = []
    for image_num in range(question_num,question_num+num_images):
        image_triple = []
        merged_questions += generate_hit.generate_single_question(url_struct[image_num][0],url_struct[image_num][pair_num][0],url_struct[image_num][pair_num][1])
        image_triple.append(url_struct[image_num][0])
        image_triple.append(url_struct[image_num][pair_num][0])
        image_triple.append(url_struct[image_num][pair_num][1])
        images_per_hit.append(image_triple)

    question = generate_hit.generate_html_question(merged_questions = merged_questions)

    return question,images_per_hit

def get_url_struct(filename):

    """
    Returns struct containing all image URLs

    """
    with open(filename,'rb') as f:
        url_struct = pickle.load(f)
    return url_struct

if __name__ == '__main__':

    MTURK_SANDBOX = 'https://mturk-requester-sandbox.us-east-1.amazonaws.com'

    mturk = boto3.client('mturk',
                        aws_access_key_id = "AKIAI4DQ22LGP4HC3X4Q",
                        aws_secret_access_key = "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",
                        region_name='us-east-1',
                        endpoint_url = MTURK_SANDBOX
                        )

    print ("I have $" + mturk.get_account_balance()['AvailableBalance'] + " in my Sandbox account")
    hit_dict = {}
    url_struct = get_url_struct(filename = 'url_struct.pkl')
    question,images_per_hit = create_question(url_struct,question_num = 0,num_images = 10, pair_num = 1)
    hit = create_hit(mturk=mturk,question=question)
    hit_dict[hit['HITId']] = images_per_hit
    print ("A new HIT has been created. You can preview it here:")
    print ("https://workersandbox.mturk.com/mturk/preview?groupId=" + hit['HITGroupId'])
    print ("HITID = " + hit['HITId']+ " (Use to Get Results)")
    print(hit_dict)


