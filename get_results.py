import boto3
import pickle

MTURK_SANDBOX = 'https://mturk-requester-sandbox.us-east-1.amazonaws.com'
mturk = boto3.client('mturk',
   aws_access_key_id = "AKIAI4DQ22LGP4HC3X4Q",
   aws_secret_access_key = "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",
   region_name='us-east-1',
   endpoint_url = MTURK_SANDBOX
)

# You will need the following library
# to help parse the XML answers supplied from MTurk
# Install it in your local environment with
# pip install xmltodict
#import xmltodict
with open('hits.pkl','rb') as f:
    hits = pickle.load(f)

# We are only publishing this task to one Worker
# So we will get back an array with one item if it has been completed

for hit_id in hits:
    worker_results = mturk.list_assignments_for_hit(HITId=hit_id, AssignmentStatuses=['Submitted'])
    print('Results for HIT ID : {}'.format(hit_id))
    for assignment in worker_results['Assignments']:
        print(assignment)


