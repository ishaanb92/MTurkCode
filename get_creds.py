import pandas as pd


def get_creds(filename):
    df = pd.read_csv(filename)
    access_key = df['Access key ID'][0]
    secret_access_key = df['Secret access key'][0]
    return access_key,secret_access_key

if __name__  == '__main__':
    get_creds('credentials.csv')
