import pandas as pd
import pickle
import numpy as np
import networkx as nx
import matplotlib.pyplot as plt


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
    for idx in range(1,len(image_row)):
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
    row_length = len(image_row)
    for idx in range(1,row_length):
        pair_dict[tuple(image_row[idx])] = None # Lists are mutable, hence can't be used as keys for dicts

    for keys in pair_dict:
        pairFrame = imageFrame[(imageFrame['Generated Image 1'] == keys[0]) & (imageFrame['Generated Image 2'] == keys[1])]
        num_compares = pairFrame.shape[0]
        # Compare which image has been the "Answer" more times in the pair
        if pairFrame[pairFrame['Answer'] == keys[0]].shape[0] > pairFrame[pairFrame['Answer'] == keys[1]].shape[0]:
            num_wins = pairFrame[pairFrame['Answer'] == keys[0]].shape[0]
            pair_dict[tuple(keys)] = [keys[0],num_wins/num_compares]
        elif pairFrame[pairFrame['Answer'] == keys[0]].shape[0] <  pairFrame[pairFrame['Answer'] == keys[1]].shape[0]:
            num_wins = pairFrame[pairFrame['Answer'] == keys[1]].shape[0]
            pair_dict[tuple(keys)] = [keys[1],num_wins/num_compares]
        else:
            pair_dict[tuple(keys)] = ["Equal or Unsure",0]


    return pair_dict

def generate_directed_graph(image_row,df):
    """
    Generates a directed graph based on pairwise
    comparisions

    """
    dg = nx.DiGraph()
    pairwise_dict = analyze_pairwise(image_row = image_row,df = df)
    image_list = create_image_list(image_row = image_row) # List of gen image URL (Nodes of the graph)
    dg.add_nodes_from(image_list)
    for pairs in pairwise_dict:
        if pairwise_dict[pairs][0] == pairs[0]:
            dg.add_edge(pairs[0],pairs[1],weight = pairwise_dict[pairs][1])
        elif pairwise_dict[pairs][0] == pairs[1]:
            dg.add_edge(pairs[1],pairs[0],weight = pairwise_dict[pairs][1])
        else:
            continue

    # Noisy_0 > Noisy_1, so add an edge
    original_url = image_row[0]
    base_url = original_url.replace('original.jpg','')
    noisy_url_0 = base_url + 'gen/' + 'noisy_0.jpg'

    return dg

def find_cycles(g):
    """
    Returns list of cycles in the directed graph

    """
    cycle_list =  list(nx.simple_cycles(g))
    print('Number of cycles found : {}'.format(len(cycle_list)))
    for cycle in cycle_list:
        print('Cycle {}'.format(cycle_list.index(cycle)))
        for node in cycle:
            print('{} -->'.format(node),end = '',flush = True)
        print('{}'.format(cycle[0])) #Print first node of cycle for completeness and easier interpretation
        print('\n')

    return cycle_list


def draw_graph(g):
    """
    Generates visualization for the pairwise graph
    DEBUG-ONLY feature

    """
    nx.draw_networkx(g,pos=nx.circular_layout(g))
    labels = nx.get_edge_attributes(g,'weight')
    nx.draw_networkx_edge_labels(g,pos = nx.circular_layout(g),labels = labels)
    plt.xlim((-1,3))
    plt.show()

def show_results(df,image_row):

    score_dict = analyze_original_image(image_row = image_row,
                                        df = df)
    s = [(k, score_dict[k]) for k in sorted(score_dict, key=score_dict.get, reverse=True)]
    print('Count based scores for {}'.format(image_row[0]))
    for k,v in s:
        print('{} {}'.format(k,v))
    dg = generate_directed_graph(image_row = image_row,
                                 df = df)

    cycle_list = find_cycles(g = dg)
    draw_graph(g=dg)


if __name__ == '__main__':
    df = read_results('results_mturk.csv')
    url_struct = read_url_struct('url_struct.pkl')
    for image_idx in range(1):
        show_results(df=df,image_row = url_struct[image_idx])


