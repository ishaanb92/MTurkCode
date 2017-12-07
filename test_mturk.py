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

with open('test_hit.xml','r') as f:
    test_hit = f.read()

new_hit = mturk.create_hit(
    Title = 'Finding similar images',
    Description = 'Given are sets of 3 images, select which image looks more like the original image',
    Keywords = 'text, quick, labeling',
    Reward = '0.01',
    MaxAssignments = 1,
    LifetimeInSeconds = 172800,
    AssignmentDurationInSeconds = 10*60*60,
    AutoApprovalDelayInSeconds = 14400,
    Question = test_hit
)


print ("A new HIT has been created. You can preview it here:")
print ("https://workersandbox.mturk.com/mturk/preview?groupId=" + new_hit['HIT']['HITGroupId'])
print ("HITID = " + new_hit['HIT']['HITId'] + " (Use to Get Results)")
