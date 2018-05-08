import pandas as pd
import numpy as np
from analyze_results import *




def clean_results(model1,model2,df_metric,df_responses):
    """
    Prunes the disagreements for a given model pair
    Based my own responses to weed out the "false" disagreements

    """
    df_disagree,df_ties,agree = compare_results(model1 = model1,
                                          model2= model2,
                                          df_metric = df_metric,
                                          df_responses=df_responses,
                                          blind = False)
    with open('responses_dcgan_dcgan-gp.txt','r') as f:
        responses = f.read().splitlines()

    metric_wins = 0
    user_wins = 0
    for index,row in df_disagree.iterrows():
        winner = row['Winner']
        winner_url = row[winner.upper()]
        #Check if winner is present in responses
        if winner_url not in responses: # Either Unsure (i.e. tie) or I have agreed with the metric
            metric_wins += 1
        else:
            user_wins += 1

    ties = responses.count('Unsure')

    print('Number of times the metric won i.e. the user response was deemed wrong (including ties) : {}'.format(metric_wins))
    print('Number of ties detected by me : {}'.format(ties))
    print('Number of genuine disagreements : {}'.format(user_wins))




if __name__ == '__main__':

    df_responses = pd.read_csv('results/celebA_results_all.csv')
    df_metric = pd.read_csv('results/gan_distances_new_model.csv')

    clean_results(model1 = 'dcgan',
                  model2 = 'dcgan-gp',
                  df_metric = df_metric,
                  df_responses = df_responses
                  )

