import pandas as pd
import pickle
import numpy as np
import networkx as nx
import matplotlib.pyplot as plt
from collections import OrderedDict
from scipy.stats import shapiro
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
        pairFrame = imageFrame[(imageFrame['Generated Image 1'] == keys[0]) & (imageFrame['Generated Image 2'] == keys[1])]
        num_compares = pairFrame.shape[0]
        if verbose is True:
            print('Pair : {} Compares : {}'.format(keys,num_compares))
        # Compare which image has been the "Answer" more times in the pair
        if pairFrame[pairFrame['Answer'] == keys[0]].shape[0] >= pairFrame[pairFrame['Answer'] == keys[1]].shape[0]:
            num_wins = pairFrame[pairFrame['Answer'] == keys[0]].shape[0]
            if verbose is True:
                print('{} wins : {}'.format(keys[0],num_wins))
            pair_dict[tuple(keys)] = [keys[0],num_wins/num_compares]
        else:
            num_wins = pairFrame[pairFrame['Answer'] == keys[1]].shape[0]
            pair_dict[tuple(keys)] = [keys[1],num_wins/num_compares]
            if verbose is True:
                print('{} wins : {}'.format(keys[1],num_wins))


    return pair_dict

def generate_directed_graph(image_row,df):
    """
    Generates a directed graph based on pairwise
    comparisions

    """
    dg = nx.DiGraph()
    pairwise_dict = analyze_pairwise(image_row = image_row,df = df,verbose=False)
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
    node_map = relabel_nodes(g=g,image_idx=image_idx)
    nx.draw_networkx(g,pos=nx.spectral_layout(g),font_size=15,labels=node_map)
    labels = nx.get_edge_attributes(g,'weight')
    nx.draw_networkx_edge_labels( g,
                                  pos = nx.spectral_layout(g),
                                  labels = labels,
                                  arrowstyle = '->',
                                  arrowsize = 10
                                )
    plt.xlim((-2,2))
    title = "Graph for images generated from : {}".format(image_name)
    plt.title(title)
    plt.show()


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
                                 df = df)

    cycle_list = find_cycles(g = dg)
    graph_score_dict = compute_graph_scores(dg)
    sorted_graph_dict = dict_sort_values(score_dict = graph_score_dict)
    if verbose is True:
        print('Graph based scores for {}'.format(image_row[0]))
        for k,v in sorted_graph_dict:
            print('{} {}'.format(k,v))
        print('\n')
    if verbose is True:
        draw_graph(g=dg,image_idx = image_idx)

    return graph_score_dict,count_score_dict

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


    for image_idx in range(num_images):
        graph_dict,count_dict = show_per_image_results(df=df,url_struct = url_struct,image_idx=image_idx)

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

 #   # Histograms
 #   plt.hist(ae_score_count,bins=50)
 #   plt.xlabel('Scores')
 #   plt.ylabel('Frequencies')
 #   plt.title('Histogram for Auto-Encoder Count Based scores')
 #   plt.show()

 #   plt.hist(gan_score_count,bins=50)
 #   plt.xlabel('Scores')
 #   plt.ylabel('Frequencies')
 #   plt.title('Histogram for GAN Count Based scores')
 #   plt.show()

 #   plt.hist(ce_score_count,bins=50)
 #   plt.xlabel('Scores')
 #   plt.ylabel('Frequencies')
 #   plt.title('Histogram for Context-Encoder Count Based scores')
 #   plt.show()

 #   plt.hist(noisy_score_count,bins=50)
 #   plt.xlabel('Scores')
 #   plt.ylabel('Frequencies')
 #   plt.title('Histogram for Noisy Count Based scores')
 #   plt.show()





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

if __name__ == '__main__':
    df = read_results('results_mturk.csv')
    url_struct = read_url_struct('url_struct.pkl')
    #accumulate_per_image_results(df=df,url_struct=url_struct,num_images=200)
    #create_output_csv(df=df,url_struct=url_struct)
    show_per_image_results(df=df,url_struct=url_struct,image_idx=0,verbose=True)
