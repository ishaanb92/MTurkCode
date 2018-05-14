import pandas as pd
import numpy as np
from analyze_results import *
from argparse import ArgumentParser


def clean_results(model1,model2,df_metric,df_responses):
    """
    Prunes the disagreements for a given model pair
    Based my own responses to weed out the "false" disagreements

    Returns a pruned list of disagreements between metric and user responses
    """
    df_disagree,df_ties,agree = compare_results(model1 = model1,
                                          model2= model2,
                                          df_metric = df_metric,
                                          df_responses=df_responses,
                                          blind = False)
    with open('pruned_responses/responses_{}_{}.txt'.format(model1,model2),'r') as f:
        responses = f.read().splitlines()

    metric_wins = 0
    user_wins = 0
    fake_disagreements = []
    for index,row in df_disagree.iterrows():
        winner = row['Winner']
        winner_url = row[winner.upper()]
        #Check if winner is present in responses
        if winner_url not in responses: # Either Unsure (i.e. tie) or I have agreed with the metric
            metric_wins += 1
            fake_disagreements.append(index)

        else: # Genuine disagreements
            user_wins += 1

    ties = responses.count('Unsure')

    print('Number of times the metric won i.e. the user response was deemed wrong (including ties) : {}'.format(metric_wins))
    print('Number of ties detected by me : {}'.format(ties))
    print('Number of genuine disagreements : {}'.format(user_wins))

    # Remove the fake disagreements
    df_pruned = df_disagree.drop(df_disagree.index[fake_disagreements])
    return df_pruned




if __name__ == '__main__':

    parser = ArgumentParser()
    parser.add_argument('--model1',type=str,required=True)
    parser.add_argument('--model2',type=str,required=True)
    args = parser.parse_args()
    df_responses = pd.read_csv('results/celebA_results_all.csv')
    df_metric = pd.read_csv('results/gan_distances_new_model.csv')

    model1 = args.model1
    model2 = args.model2
    df_pruned = clean_results(model1 =model1,
                  model2 = model2,
                  df_metric = df_metric,
                  df_responses = df_responses
                  )

    df_pruned.to_html('results/disagreement_{}_{}_pruned.html'.format(model1,model2),formatters={'Original Image': image_path_to_html,'{}'.format(model1.upper()):image_path_to_html,'{}'.format(model2.upper()):image_path_to_html},escape=False)
