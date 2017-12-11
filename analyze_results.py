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
    Return statistics for all pairs of a given
    original image

    """
    imageFrame = return_image_subframe(image_url = image_row[0],df=df)
    gen_images = create_image_list(image_row = image_row)
    score_dict = {key : 0 for key in gen_images}
    for key in score_dict:
        score_dict[key] = imageFrame[imageFrame['Answer'] == key].shape[0] # TODO : Normalize this
    print(score_dict)



if __name__ == '__main__':
    df = read_results('results_all_pairs.csv')
    url_struct = read_url_struct('url_struct.pkl')
    analyze_original_image(image_row = url_struct[0],
                           df = df)

