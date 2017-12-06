#!/usr/bin/env python3
import boto3

MTURK_SANDBOX = 'https://mturk-requester-sandbox.us-east-1.amazonaws.com'

mturk = boto3.client('mturk',
                    aws_access_key_id = "AKIAI4DQ22LGP4HC3X4Q",
                    aws_secret_access_key = "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",
                    region_name='us-east-1',
                    endpoint_url = MTURK_SANDBOX
                    )

print ("I have $" + mturk.get_account_balance()['AvailableBalance'] + " in my Sandbox account")

with open('questions.xml','r') as f:
    question = f.read()

new_hit = mturk.create_hit(
    Title = 'Is this Tweet happy, angry, excited, scared, annoyed or upset?',
    Description = 'Read this tweet and type out one word to describe the emotion of the person posting it: happy, angry, scared, annoyed or upset',
    Keywords = 'text, quick, labeling',
    Reward = '0.15',
    MaxAssignments = 1,
    LifetimeInSeconds = 172800,
    AssignmentDurationInSeconds = 600,
    AutoApprovalDelayInSeconds = 14400,
    Question = question
)

print ("A new HIT has been created. You can preview it here:")
print ("https://workersandbox.mturk.com/mturk/preview?groupId=" + new_hit['HIT']['HITGroupId'])
