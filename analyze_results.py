import pandas as pd
import pickle
import numpy as np
import networkx as nx
import matplotlib.pyplot as plt
from collections import OrderedDict
from scipy.stats import shapiro
import matplotlib.pyplot as plt
import os
import pickle
from get_new_results import models
from url_struct import generate_pairs
import math

import base64
from PIL import Image
from io import BytesIO

"""
Script that dumps all analysis related functions together
TODO: There is a lot of junk in this script, need to remove code/functions that are not being used

"""

images_dir_base = '/home/fungii/inpaintings/celeba_fixed'
pd.set_option('display.max_colwidth', -1)
base_url = 'https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/'

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

def analyze_pairwise(image_row,df,verbose=False):
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
        pairFrame = imageFrame[((imageFrame['Generated Image 1'] == keys[0]) & (imageFrame['Generated Image 2'] == keys[1]))]
        num_compares = pairFrame.shape[0]
        if verbose is True:
            print('Pair : {} Compares : {}'.format(keys,num_compares))
        # Compare which image has been the "Answer" more times in the pair
        if pairFrame[pairFrame['Answer'] == keys[0]].shape[0] >= pairFrame[pairFrame['Answer'] == keys[1]].shape[0]:
            num_wins = pairFrame[pairFrame['Answer'] == keys[0]].shape[0]
            num_losses = num_compares-num_wins
            if verbose is True:
                print('{} wins : {}'.format(keys[0],num_wins))
            pair_dict[tuple(keys)] = [keys[0],round((num_wins-num_losses)/num_compares,2)]
        else:
            num_wins = pairFrame[pairFrame['Answer'] == keys[1]].shape[0]
            num_losses = num_compares-num_wins
            pair_dict[tuple(keys)] = [keys[1],round((num_wins-num_losses)/num_compares,2)]
            if verbose is True:
                print('{} wins : {}'.format(keys[1],num_wins))


    return pair_dict

def generate_directed_graph(image_row,df,verbose=False):
    """
    Generates a directed graph based on pairwise
    comparisions

    """
    dg = nx.DiGraph()
    pairwise_dict = analyze_pairwise(image_row = image_row,df = df,verbose=verbose)
    image_list = create_image_list(image_row = image_row) # List of gen image URL (Nodes of the graph)
    dg.add_nodes_from(image_list)
    for pairs in pairwise_dict:
        # Who is better in THIS pair based on user votes?
        if pairwise_dict[pairs][0] == pairs[0]:
            dg.add_edge(pairs[0],pairs[1],weight = pairwise_dict[pairs][1])
        elif pairwise_dict[pairs][0] == pairs[1]:
            dg.add_edge(pairs[1],pairs[0],weight = pairwise_dict[pairs][1])
        else:
            continue

    return dg

def find_cycles(g,verbose=False):
    """
    Returns list of cycles in the directed graph

    """
    cycle_list =  list(nx.simple_cycles(g))
    if verbose is True:
        #print('Number of cycles found : {}'.format(len(cycle_list)))
        if len(cycle_list) != 0:
            print('Cycle found')
        for cycle in cycle_list:
            print('Cycle {}'.format(cycle_list.index(cycle)))
            for node in cycle:
                print('{} -->'.format(node),end = '',flush = True)
            print('{}'.format(cycle[0])) #Print first node of cycle for completeness and easier interpretation

    return cycle_list


def draw_graph(g,image_idx):
    """
    Generates visualization for the pairwise graph
    DEBUG-ONLY feature

    """
    image_name = 'https://s3-us-west-1.amazonaws.com/facesdb/mutrk_db_fixed/' + str(image_idx) + '/original.jpg'
    dir_name = 'graphs'
    if not os.path.isdir(dir_name):
        os.makedirs(dir_name)

    node_map = relabel_nodes(g=g,image_idx=image_idx)
    nx.draw_networkx(g,pos=nx.circular_layout(g),font_size=10,labels=node_map)
    labels = nx.get_edge_attributes(g,'weight')
    nx.draw_networkx_edge_labels( g,
                                  pos = nx.circular_layout(g),
                                  labels = labels,
                                  arrowstyle = '->',
                                  arrowsize = 10,
                                  font_size=8
                                )
    plt.xlim((-2,2))
    title = "Graph for images generated from : {}".format(image_name)
    plt.title(title)
    manager = plt.get_current_fig_manager()
    manager.resize(*manager.window.maxsize())

    filename =  'graph_{}'.format(image_idx)+'.png'
    filepath = os.path.join(dir_name,filename)
    #plt.show()
    plt.savefig(filepath,bbox_inches='tight')
    plt.close()


def relabel_nodes(g,image_idx):
    """
    Utility function to shorten URLs
    for better viz and interpretation of graphs
    """

    relabel_dict = {}

    for node in g.nodes(data=False):
        split = node.split('/')
        relabel_dict[node] = split[-1]

    return relabel_dict

def compute_graph_scores(dg):
    """
    Computes score for each generated image (node in the graph)
    based on the weight and direction of the edges

    """
    graph_score_dict = {}
    for node in dg.nodes(data=False):
        out_weights_acc = 0
        in_weights_acc = 0
        for succ in dg.successors(node):
            out_weights_acc += dg.get_edge_data(node,succ)['weight']
        for pred in dg.predecessors(node):
            in_weights_acc += dg.get_edge_data(pred,node)['weight']
        score = out_weights_acc - in_weights_acc
        graph_score_dict[node] = score

    return graph_score_dict



def show_per_image_results(df,url_struct,image_idx,verbose=False):
    """
    Shows the results for images generated from a
    single original image

    """

    # Count-based score
    image_row = url_struct[image_idx]

    count_score_dict = analyze_original_image(image_row = image_row,
                                        df = df)

    sorted_count_dict = dict_sort_values(score_dict = count_score_dict)

    if verbose is True:
        print('Count based scores for {}'.format(image_row[0]))
        for k,v in sorted_count_dict:
            print('{} {}'.format(k,v))

    # Graph based scores

    dg = generate_directed_graph(image_row = image_row,
                                 df = df,verbose=verbose)

    cycle_list = find_cycles(g = dg,verbose=True)
    graph_score_dict = compute_graph_scores(dg)
    sorted_graph_dict = dict_sort_values(score_dict = graph_score_dict)
    if verbose is True:
        print('Graph based scores for {}'.format(image_row[0]))
        for k,v in sorted_graph_dict:
            print('{} {}'.format(k,v))
        print('\n')
    if len(cycle_list) != 0:
        draw_graph(g=dg,image_idx = image_idx)
        return graph_score_dict,count_score_dict,image_idx

    return graph_score_dict,count_score_dict,None

def create_output_csv(df,url_struct,num_images=200):
    """
    Creates output CSV file for original image-generated image pair
    with both types of scores

    """
    result_table = []
    for image_idx in range(num_images):
        image_row = url_struct[image_idx]
        graph_score_dict,count_score_dict = show_per_image_results(df=df,url_struct = url_struct,image_idx=image_idx)
        graph_scores_sorted = dict_sort_keys(graph_score_dict)
        count_scores_sorted = dict_sort_keys(count_score_dict)
        for pair_g,pair_c in zip(graph_scores_sorted,count_scores_sorted):
            result_row = []
            result_row.append(image_row[0])
            result_row.append(pair_g[0]) # Or pair_c[0] doesn't matter
            result_row.append(pair_g[1]) # Graph-based score
            result_row.append(pair_c[1]) # Count-based score
            result_table.append(result_row)
    result_table = np.asarray(result_table)
    df_scores = pd.DataFrame(data=result_table,columns = ['Original Image','Generated Image','Graph Based Score','Count Based Score'])
    df_scores.to_csv('scores.csv')


def dict_sort_values(score_dict):
    """
    Sorting keys (generated images) in a score dict
    based on the computed score

    """
    s = [(k, score_dict[k]) for k in sorted(score_dict, key=score_dict.get, reverse=True)]
    return s

def dict_sort_keys(score_dict):
    """
    Sorting the score dict based on key-names
    Used to collect scores coming from the same
    generative model.

    Returns a list of tuples

    """
    sorted_dict = OrderedDict(sorted(score_dict.items()))
    sorted_list = [(k,sorted_dict[k]) for k in sorted_dict]
    return sorted_list

def accumulate_per_image_results(df,url_struct,num_images):

    """
    Accumulates and separates the scores for different generative
    model for programmed number of original images.

    Computes mean and variance of score(s) for all models.
    Performs normality tests on the score(s) for all models.
    Creates illustrative graphs

    """
    gan_score_graph = []
    gan_score_count = []

    ae_score_graph = []
    ae_score_count = []

    ce_score_graph = []
    ce_score_count = []

    noisy_score_graph = []
    noisy_score_count = []

    cycle_idxs = []


    for image_idx in range(num_images):
        graph_dict,count_dict,idx = show_per_image_results(df=df,url_struct = url_struct,image_idx=image_idx)
        if idx is not None:
            cycle_idxs.append(idx)

        sorted_graph_list = dict_sort_keys(graph_dict)
        sorted_count_list = dict_sort_keys(count_dict)

        # Bucketing scores for each model (UGLY FUCKING CODE. CHANGE ASAP)
        ae_score_graph.append(sorted_graph_list[0][1])
        ce_score_graph.append(sorted_graph_list[1][1])
        gan_score_graph.append(sorted_graph_list[2][1])
        noisy_score_graph.append(sorted_graph_list[3][1])

        ae_score_count.append(sorted_count_list[0][1])
        ce_score_count.append(sorted_count_list[1][1])
        gan_score_count.append(sorted_count_list[2][1])
        noisy_score_count.append(sorted_count_list[3][1])

    #Write a list of indexes with cycles
    with open('cycles.pkl','wb') as f:
        pickle.dump(cycle_idxs,f)

    gan_score_graph = np.asarray(gan_score_graph,dtype=np.float32)

    ae_score_graph = np.asarray(ae_score_graph,dtype=np.float32)

    ce_score_graph = np.asarray(ce_score_graph,dtype=np.float32)

    noisy_score_graph = np.asarray(noisy_score_graph,dtype=np.float32)

    # Generate CIs for means
    lower_gan_score_graph,upper_gan_score_graph = generate_confidence_mean(X=gan_score_graph,n_bootstrap = 1000)
    lower_ae_score_graph,upper_ae_score_graph = generate_confidence_mean(X=ae_score_graph,n_bootstrap = 1000)
    lower_ce_score_graph,upper_ce_score_graph = generate_confidence_mean(X=ce_score_graph,n_bootstrap = 1000)
    lower_noisy_score_graph,upper_noisy_score_graph = generate_confidence_mean(X=noisy_score_graph,n_bootstrap = 1000)

    gan_score_count = np.asarray(gan_score_count)

    ae_score_count = np.asarray(ae_score_count)

    ce_score_count = np.asarray(ce_score_count)

    noisy_score_count = np.asarray(noisy_score_count)

    lower_gan_score_count,upper_gan_score_count = generate_confidence_mean(X=gan_score_count,n_bootstrap = 1000)
    lower_ae_score_count,upper_ae_score_count = generate_confidence_mean(X=ae_score_count,n_bootstrap = 1000)
    lower_ce_score_count,upper_ce_score_count = generate_confidence_mean(X=ce_score_count,n_bootstrap = 1000)
    lower_noisy_score_count,upper_noisy_score_count = generate_confidence_mean(X=noisy_score_count,n_bootstrap = 1000)

    print('GRAPH SCORE STATISTICS')
    print('AE : Mean {} Variance {} 95% CI (Mean) : [ {} {} ]'.format(np.mean(ae_score_graph),np.var(ae_score_graph),lower_ae_score_graph,upper_ae_score_graph))
    print('GAN : Mean {} Variance {} 95% CI (Mean) : [ {} {} ]'.format(np.mean(gan_score_graph),np.var(gan_score_graph),lower_gan_score_graph,upper_gan_score_graph))
    print('CE : Mean {} Variance {} 95% CI (Mean): [ {} {} ]'.format(np.mean(ce_score_graph),np.var(ce_score_graph),lower_ce_score_graph,upper_ce_score_graph))
    print('Noisy : Mean {} Variance {} 95% CI (Mean): [ {} {} ]'.format(np.mean(noisy_score_graph),np.var(noisy_score_graph),lower_noisy_score_graph,upper_noisy_score_graph))

    print('\n')

    print('COUNT BASED SCORE STATISTICS')
    print('AE : Mean {} Variance {} 95% CI (Mean) : [ {} {} ]'.format(np.mean(ae_score_count),np.var(ae_score_count),lower_ae_score_count,upper_ae_score_count))
    print('GAN : Mean {} Variance {} 95% CI (Mean): [ {} {} ]'.format(np.mean(gan_score_count),np.var(gan_score_count),lower_gan_score_count,upper_gan_score_count))
    print('CE : Mean {} Variance {} 95% CI (Mean): [ {} {} ]'.format(np.mean(ce_score_count),np.var(ce_score_count),lower_ce_score_count,upper_ce_score_count))
    print('Noisy : Mean {} Variance {} 95% CI (Mean): [ {} {} ]'.format(np.mean(noisy_score_count),np.var(noisy_score_count),lower_noisy_score_count,upper_noisy_score_count))

    x_labels = ['GAN','AE','CE','Noisy']
    merged_graph =  np.vstack((gan_score_graph,ae_score_graph,ce_score_graph,noisy_score_graph))
    fig = plt.figure()
    ax = fig.add_subplot(111)
    ax.set_title('Box plot for graph based scores')
    ax.set_ylabel('Scores')
    plt.boxplot(merged_graph.T,bootstrap=1000)
    ax.set_xticklabels(x_labels)
    plt.show()

    merged_count =  np.vstack((gan_score_count,ae_score_count,ce_score_count,noisy_score_count))
    fig = plt.figure()
    ax = fig.add_subplot(111)
    ax.set_title('Box plot for count based scores')
    ax.set_ylabel('Scores')
    plt.boxplot(merged_count.T,bootstrap=1000)
    ax.set_xticklabels(x_labels)
    plt.show()

    plt.hist(ae_score_graph,bins=50)
    plt.xlabel('Scores')
    plt.ylabel('Frequencies')
    plt.title('Histogram for Auto-Encoder Scores')
    plt.show()

    plt.hist(gan_score_graph,bins=50)
    plt.xlabel('Scores')
    plt.ylabel('Frequencies')
    plt.title('Histogram for GAN Scores')
    plt.show()

    plt.hist(ce_score_graph,bins=50)
    plt.xlabel('Scores')
    plt.ylabel('Frequencies')
    plt.title('Histogram for Context-Encoder Scores')
    plt.show()

    plt.hist(noisy_score_graph,bins=50)
    plt.xlabel('Scores')
    plt.ylabel('Frequencies')
    plt.title('Histogram for Noisy Image Scores')
    plt.show()
    #Create plots
#    x_axis = [i for i in range(num_images)]
#    fig = plt.figure()
#    ax = fig.add_subplot(111)
#    ax.set_title('Graph Scores for Images v/s Image IDs')
#    ax.scatter(x_axis,ae_score_graph,label='Auto-Encoder Score')
#    ax.scatter(x_axis,ce_score_graph,label='Context-Encoder Score')
#    ax.scatter(x_axis,gan_score_graph,label='GAN Score')
#    ax.scatter(x_axis,noisy_score_graph,label='Noisy Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Graph Based Score')
#    ax.set_xticks(x_axis)
#    ax.legend(loc='best')
#    plt.show()
#
#
#    fig = plt.figure()
#    ax = fig.add_subplot(111)
#    ax.set_title('Count Scores for Images v/s Image IDs')
#    ax.scatter(x_axis,ae_score_count,label='Auto-Encoder Score')
#    ax.scatter(x_axis,ce_score_count,label='Context-Encoder Score')
#    ax.scatter(x_axis,gan_score_count,label='GAN Score')
#    ax.scatter(x_axis,noisy_score_count,label='Noisy Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Count Based Score')
#    ax.set_xticks(x_axis)
#    ax.legend(loc='best')
#    plt.show()
#
#    #Individual Scores (Graph Score)
#    fig = plt.figure()
#    ax = fig.add_subplot(111)
#    ax.set_title('Graph Scores for GAN Images v/s Image IDs')
#    ax.scatter(x_axis,gan_score_graph,label='Auto-Encoder Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Graph Based Score')
#    ax.set_xticks(x_axis)
#    ax.legend(loc='best')
#    plt.show()
#
#    fig = plt.figure()
#    ax = fig.add_subplot(111)
#    ax.set_title('Graph Scores for AE Images v/s Image IDs')
#    ax.scatter(x_axis,ae_score_graph,label='Auto-Encoder Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Graph Based Score')
#    ax.set_xticks(x_axis)
#    ax.legend(loc='best')
#    plt.show()
#
#    fig = plt.figure()
#    ax = fig.add_subplot(111)
#    ax.set_title('Graph Scores for CE Images v/s Image IDs')
#    ax.scatter(x_axis,ce_score_graph,label='Auto-Encoder Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Graph Based Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Graph Based Score')
#    ax.set_xticks(x_axis)
#    ax.legend(loc='best')
#    plt.show()
#
#
#    fig = plt.figure()
#    ax = fig.add_subplot(111)
#    ax.set_title('Graph Scores for Noisy Images v/s Image IDs')
#    ax.scatter(x_axis,noisy_score_graph,label='Auto-Encoder Score')
#    ax.set_xlabel('Image ID')
#    ax.set_ylabel('Graph Based Score')
#    ax.set_xticks(x_axis)
#    ax.legend(loc='best')
#    plt.show()






def bootstrap_resample(X, n=None):
    """ Bootstrap resample an array_like
    Parameters
    ----------
    X : array_like
      data to resample
    n : int, optional
      length of resampled array, equal to len(X) if n==None
    Results
    -------
    returns X_resamples
    Code source : https://gist.github.com/aflaxman/6871948
    """
    if isinstance(X, pd.Series):
        X = X.copy()
        X.index = range(len(X.index))
    if n == None:
        n = len(X)

    resample_i = np.floor(np.random.rand(n)*len(X)).astype(int)
    X_resample = np.array(X[resample_i])  # TODO: write a test demonstrating why array() is important
    return X_resample

def generate_confidence_mean(X,n_bootstrap):
    """
    Estimate a 95% confidence interval for the mean score
    using statistical bootstrapping

    """
    sample_mean = np.mean(X)
    mean_diffs = []
    for step in range(n_bootstrap):
        b_sample = bootstrap_resample(X=X)
        mean_diffs.append(np.mean(b_sample) - sample_mean)
    perc_step = 100/n_bootstrap
    u_index = np.floor(97.5/perc_step).astype(int)
    l_index = np.floor(2.5/perc_step).astype(int)
    mean_diffs.sort()
    mean_diffs = np.asarray(mean_diffs,dtype=np.float32)
    return sample_mean-mean_diffs[u_index],sample_mean-mean_diffs[l_index]



def normality_test(score_array):
    """
    Given a score array for a generative model,
    performs a statistical test of normality (Shapiro-Wilk).

    Returns p-value produced from the test

    """
    _,p_value = shapiro(x=score_array)
    return p_value


def responses_per_pair(df):
    """
    Diagnostic function to check how many responses we have per-pair
    To ensure fair evaluation of responses

    """
    pairs = generate_pairs(models)
    count_dict = {}
    for pair in pairs:
        count_dict[tuple(pair)] = 0
    for pair in pairs:
        count_dict[tuple(pair)] = df[((df['Model 1'] == pair[0]) & (df['Model 2'] == pair[1]))].shape[0] + df[((df['Model 1'] == pair[1]) & (df['Model 2'] == pair[0]))].shape[0]
    print(count_dict)

def get_image_id(url):
    return int(url.split('/')[-2])

def find_missing_images(df):

    sub_df = df[((df['Model 1'] == 'wgan-gp') & (df['Model 2'] == 'dragan'))]

    if sub_df.shape[0] == 0:
        sub_df = df[((df['Model 1'] == 'dragan') & (df['Model 2'] == 'wgan-gp'))]

    ids_list = []
    for url in sub_df['Original Image']:
        ids_list.append(get_image_id(url))

    ids_list = list(set(ids_list))
    print('Number of images part of quiz : {}'.format(len(ids_list)))

    missing_ids = []
    for id_check in range(1000):
        if id_check not in ids_list:
            missing_ids.append(id_check)
    print('Missing IDs : {}'.format(len(missing_ids)))



def rank_models_metric(df):
    """
    Ranks models according to learned distance

    """
    for column in df:
        if column == 'Original Image' or column == 'Unnamed':
            continue
        else:
            print('Model : {} Mean distance : {} Variance : {}'.format(column,df[column].mean(),df[column].var()))

def rank_models_responses(df):
    """
    Coarse grain analysis of results, win-counts per model
    Prints a dictionary with counts

    """
    score_dict = {}
    # Create dict to score model-wise counts
    for model in models:
        score_dict[model] = 0

    for answer in df_responses['Winner']:
        if answer != 'Unsure':
            score_dict[answer] += 1

    print(score_dict)

def rank_models(df_responses,df_metric):
    print('User Response Ranking')
    rank_models_responses(df=df_responses)
    print('Metric Ranking')
    rank_models_metric(df=df_metric)


def create_urls(image_id,model1,model2):

    """
    Given the image ID, return the URL for the
    original image and both in-painted images

    """
    urls = []
    urls.append(base_url + str(image_id) + '/original.jpg')
    urls.append(base_url + str(image_id) + '/gen/' + '{}.jpg'.format(model1))
    urls.append(base_url + str(image_id) + '/gen/' + '{}.jpg'.format(model2))
    return urls

def winning_model(imageDF,model1,model2):
    """
    Given responses for a given original image (for a given model pair)
    return winning model
    """
    model1_wins = imageDF[(imageDF['Winner'] == model1)].shape[0]
    model2_wins = imageDF[(imageDF['Winner'] == model2)].shape[0]

    if model1_wins > model2_wins:
        return model1,model1_wins

    elif model2_wins > model1_wins:
        return model2,model2_wins

    else:
        return 'Tie',None


def return_image_paths(image_idx,model1,model2):
    """
    Returns file path [original image,model 1,model 2]
    """
    paths = []
    paths.append(os.path.join(images_dir_base,str(image_idx),'original.jpg'))
    paths.append(os.path.join(images_dir_base,str(image_idx),'gen','{}.jpg'.format(model1)))
    paths.append(os.path.join(images_dir_base,str(image_idx),'gen','{}.jpg'.format(model2)))
    return paths

def image_path_to_html(path):
    return '<img src="'+ path + '"/>'

def compare_results(model1,model2,df_metric,df_responses,blind=False):
    """
    Compare results from the learned metric -- user responses
    for a given pair on a per-image basis

    """

    subDF_responses =  df_responses[((df_responses['Model 1'] == model1) & (df_responses['Model 2'] == model2))]
    print('We have {} user responses for {}/{} pair'.format(subDF_responses.shape[0],model1,model2))

    agree = 0
    ties = 0
    tie_diff = []

    disagreement_matrix = []
    disagreement_row = []

    for index,row in df_metric.iterrows():
        disagreement_row = []
        image_urls= create_urls(index,model1,model2)
        # Check user response
        imageDF = subDF_responses[(subDF_responses['Original Image'] == image_urls[0])] # Extract responses for given original image
        if imageDF.shape[0] == 0 :
            print('Could not find any responses for original image : {}'.format(image_urls[0]))
            continue

        # Get winning image
        winner,wins = winning_model(imageDF,model1,model2)

        if winner == 'Tie':
            ties += 1

        # Agreement condition
        if (row[model1.upper()] < row[model2.upper()]) and (winner == model1):
            agree += 1

        elif (row[model1.upper()] > row[model2.upper()]) and (winner == model2):
            agree += 1
        else:
            if winner == 'Tie':
                tie_diff.append(math.fabs(row[model1.upper()] - row[model2.upper()]))
                agree += 1
            else: #Disagreement
                for url in image_urls:
                    disagreement_row.append(url)

                if blind == True:
                    #Swap the pair randomly
                    coin_face = np.random.binomial(n=1,p=0.5)
                    if coin_face == 0:
                        # Swap
                        dummy_url = disagreement_row[1]
                        disagreement_row[1] = disagreement_row[2]
                        disagreement_row[2] = dummy_url

                if blind == False:
                    disagreement_row.append(winner.upper())
                    disagreement_row.append(wins)
                    disagreement_row.append(row[model1.upper()])
                    disagreement_row.append(row[model2.upper()])

                disagreement_matrix.append(disagreement_row)





    mean_diff_tie = np.mean(np.asarray(tie_diff))
    print('Agreement Co-eff : {}'.format(agree/1000))
    print('Number of Ties : {}'.format(ties))
    print('Avg distance diff in case of tie : {}'.format(mean_diff_tie))

    disagreement_matrix = np.asarray(disagreement_matrix)

    if blind == False:
        df = pd.DataFrame(data=disagreement_matrix,columns = ['Original Image','{}'.format(model1.upper()),'{}'.format(model2.upper()),'Winner','Wins (Out of 3)','{} Cosine Similarity'.format(model1.upper()),'{} Cosine Similarity'.format(model2.upper())])
        df.to_html('disagreement_{}_{}_solution.html'.format(model1,model2),formatters={'Original Image': image_path_to_html,'{}'.format(model1.upper()):image_path_to_html,'{}'.format(model2.upper()):image_path_to_html},escape=False)
    else:
        df = pd.DataFrame(data=disagreement_matrix,columns = ['Original Image','Model 1','Model 2'])
        df.to_html('disagreement_{}_{}_blind.html'.format(model1,model2),formatters={'Original Image': image_path_to_html,'Model 1':image_path_to_html,'Model 2':image_path_to_html},escape=False)



if __name__ == '__main__':

    df_responses = pd.read_csv('celebA_results_all.csv')
    df_metric = pd.read_csv('gan_distances_new.csv')

    rank_models(df_responses=df_responses,df_metric=df_metric)

    compare_results(model1='dcgan',
                    model2='dcgan-gp',
                    df_metric = df_metric,
                    df_responses=df_responses,
                    blind = True)
