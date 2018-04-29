#!/usr/bin/env python3
import boto3
import pickle
import generate_question
from get_creds import *
import sys
import numpy as np

def create_hit(mturk,question):
    """
    Creates a single HIT using the MTurk object and the supplied XML-HTML question form
    Returns the ID of the created HIT

    """

    new_hit = mturk.create_hit(
        Title = 'Finding similar images',
        Description = 'Given are sets of 3 images, select which image looks more like the original image',
        Keywords = 'text, quick, labeling',
        Reward = '0.2', #20 cents reward per HIT per user
        MaxAssignments = 3,
        LifetimeInSeconds = 172800,
        AssignmentDurationInSeconds = 600,
        AutoApprovalDelayInSeconds = 14400,
        Question = question
    )

    return new_hit['HIT']

def create_question(url_struct,image_idx,num_images,pair_num):
    """
    Creates HTML (with XML wrapper) question form needed for a single HIT
    Returns created question and list of image triples part of the HIT

    """
    merged_questions = ""
    images_per_hit = []
    for image_num in range(image_idx,image_idx+num_images):
        image_triple = []
        #Randomize positioning of GAN in-painted images by simulating a coin-toss
        coin_face = np.random.binomial(n=1,p=0.5)
        if coin_face == 1: #Heads
            merged_questions += generate_question.generate_single_question(original = url_struct[image_num][0],
                                                                           image1 = url_struct[image_num][pair_num][0],
                                                                           image2 = url_struct[image_num][pair_num][1])
        else: #Tails
            merged_questions += generate_question.generate_single_question(original = url_struct[image_num][0],
                                                                           image1 = url_struct[image_num][pair_num][1],
                                                                           image2 = url_struct[image_num][pair_num][0])
        image_triple.append(url_struct[image_num][0])
        image_triple.append(url_struct[image_num][pair_num][0])
        image_triple.append(url_struct[image_num][pair_num][1])
        images_per_hit.append(image_triple)

    question = generate_question.generate_html_question(merged_questions = merged_questions)

    return question,images_per_hit

def create_question_single_image(url_struct,image_idx):
    """
    Creates HTML (with XML wrapper) question form needed for a single HIT
    Returns created question and list of image triples part of the HIT

    Test function :: Creates a HIT with pairs generated from a single image,
                     used to verify ordering within generated images of the same
                     original image [DO NOT USE THIS TO GENERATE HITS LAUNCHED ON MTURK, ONLY SANDBOX]

    """
    merged_questions = ""
    images_per_hit = []
    for pair in range(1,10):
        image_triple = []
        merged_questions += generate_question.generate_single_question_single_image(url_struct[image_idx][0],url_struct[image_idx][pair][0],url_struct[image_idx][pair][1],qid = pair)
        image_triple.append(url_struct[image_idx][0])
        image_triple.append(url_struct[image_idx][pair][0])
        image_triple.append(url_struct[image_idx][pair][1])
        images_per_hit.append(image_triple)

    question = generate_question.generate_html_question(merged_questions = merged_questions)

    return question,images_per_hit



def get_url_struct(filename):

    """
    Returns struct containing all image URLs

    """
    with open(filename,'rb') as f:
        url_struct = pickle.load(f)
    return url_struct

def generate_single_hit(mturk,url_struct,image_idx,num_images,pair_num,hit_dict):
    """
    Generates single HIT
    Returns updated dictionary that maintains HITID : Image triples mapping
    image_idx : 0 - 500 (images) [row index in URL struct]
    num_images : Number of images in a single HIT, programmable 1-N
    pair_num : 1 - 9, index for each generated pair of the original image [coloumn in URL struct]

    """

    question,images_per_hit = create_question(url_struct,
                                              image_idx = image_idx,
                                              num_images = num_images,
                                              pair_num = pair_num)

    hit = create_hit(mturk=mturk,question=question)
    hit_dict[hit['HITId']] = images_per_hit #Update the dictionary
    print ("HIT created on mTurk with HITID = {}".format(hit['HITId']))
    print('URL : https://workersandbox.mturk.com/mturk/preview?groupId={}'.format(hit['HITGroupId']))
    return hit_dict

def generate_single_hit_single_image(mturk,url_struct,image_idx,hit_dict):
    """
    Generates single HIT from single original image containing all generated pairs
    Returns updated dictionary that maintains HITID : Image triples mapping

    Test function :: DO NOT USE TO GENERATE HITS ON MTURK

    """

    question,images_per_hit = create_question_single_image(url_struct,
                                                           image_idx = image_idx
                                                          )

    hit = create_hit(mturk=mturk,question=question)
    hit_dict[hit['HITId']] = images_per_hit #Update the dictionary
    print ("A new HIT has been created. You can preview it here:")
    print ("HITID = " + hit['HITId']+ " (Use to Get Results)")
    return hit_dict

def save_hit_dict(filename,hit_dict):
    """
    Saves the HIT dictionary as a pickle file that can be processed
    while fetching results

    """
    with open(filename,'wb') as f:
        pickle.dump(hit_dict,f)


if __name__ == '__main__':

    MTURK_SANDBOX = 'https://mturk-requester-sandbox.us-east-1.amazonaws.com'

    access_key,secret_access_key = get_creds('credentials.csv')

    mturk = boto3.client('mturk',
                        aws_access_key_id = access_key,
                        aws_secret_access_key = secret_access_key,
                        region_name='us-east-1',
                        endpoint_url = MTURK_SANDBOX
                        )

    print ("I have $" + mturk.get_account_balance()['AvailableBalance'] + " in my Sandbox account")

    hit_dict = {} # Updated with every HIT generated

    url_struct = get_url_struct('url_struct.pkl')

    # HIT params
    images_per_hit = 20
    n_images = 340
    num_blocks = n_images//images_per_hit

    image_row_length = len(url_struct[0]) #Length = 1 + number of possible pairs

    for step in range(num_blocks):
        image_idx = 660 + step*images_per_hit
        hit_dict = generate_single_hit(mturk=mturk,
                                       url_struct=url_struct,
                                       image_idx = image_idx,
                                       pair_num = 15, #Fixed pair -- DRAGAN/WGAN-GP
                                       num_images = images_per_hit,
                                       hit_dict = hit_dict)

    print('Number of HITs launched : {}'.format(len(hit_dict)))
    save_hit_dict('hit_dict_live.pkl',hit_dict)


