import pandas as pd
import pickle
import numpy as np

def read_results(filename):
    """
    Return pandas dataframe for the results CSV file

    """
    df = pd.read_csv(filename)
    return df

def return_image_subframe(image_url,df):
    """
    From the results dataframe, retrieves all
    answers for a given original image (accessed via the URL)

    """
    subframe = df[df['Original Image'] == image_url]
    return subframe

def read_url_struct(filename):
    """
    Reads in the pickled URL struct containing
    URLs for original and generated images (pairs)

    """
    with open(filename,'rb') as f:
        url_struct = pickle.load(f)
    return url_struct

def create_image_list(image_row):
    """
    Creates list of generated images per original image from pairs list

    """
    image_list = []
    for idx in range(1,10):
        for image_url in image_row[idx]:
            image_list.append(image_url)
    return list(set(image_list))

def analyze_original_image(image_row,df):
    """
    Return count based score for all generated images of a given
    original image

    """
    imageFrame = return_image_subframe(image_url = image_row[0],df=df)
    gen_images = create_image_list(image_row = image_row)
    score_dict = {key : 0 for key in gen_images}
    for key in score_dict:
        num_times_shown = imageFrame[(imageFrame['Generated Image 1'] == key)].shape[0] + imageFrame[(imageFrame['Generated Image 2'] == key)].shape[0]
        score_dict[key] = (imageFrame[imageFrame['Answer'] == key].shape[0])/num_times_shown
    return score_dict

def analyze_pairwise(image_row,df):
    """
    Does pairwise analysis instead of overall count
    Generates a dict that can used to be create a graph
    """
    imageFrame = return_image_subframe(image_url = image_row[0],df = df)
    pair_dict = {}
    for idx in range(1,10):
        pair_dict[tuple(image_row[idx])] = None # Lists are mutable, hence can't be used as keys for dicts

    for keys in pair_dict:
        pairFrame = imageFrame[(imageFrame['Generated Image 1'] == keys[0]) & (imageFrame['Generated Image 2'] == keys[1])]
        # Compare which image has been the "Answer" more times in the pair
        if pairFrame[pairFrame['Answer'] == keys[0]].shape[0] > pairFrame[pairFrame['Answer'] == keys[1]].shape[0]:
            pair_dict[tuple(keys)] = keys[0]
        elif pairFrame[pairFrame['Answer'] == keys[0]].shape[0] <  pairFrame[pairFrame['Answer'] == keys[1]].shape[0]:
            pair_dict[tuple(keys)] = keys[1]
        else:
            pair_dict[tuple(keys)] = "Equal or Unsure"

    return pair_dict



if __name__ == '__main__':
    df = read_results('results_all_pairs.csv')
    url_struct = read_url_struct('url_struct.pkl')
    score_dict = analyze_original_image(image_row = url_struct[0],
                                        df = df)
    pair_dict = analyze_pairwise(image_row = url_struct[0],
                                 df = df)
    print(pair_dict)

