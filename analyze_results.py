import pandas as pd
import pickle

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

def analyze_original_image(image_url,df):
    """
    Return statistics for all pairs of a given
    original image

    """
    imageFrame = return_image_subframe(image_url = image_url,df=df)


if __name__ == '__main__':
    df = read_results('results_all_pairs.csv')
    url_struct = read_url_struct('url_struct.pkl')
    subF = return_image_subframe(image_url = url_struct[0][0],df = df)

