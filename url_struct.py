import numpy as np
import os
import pandas as pd


def generate_url_struct():
    base_url = 'https://s3-us-west-1.amazonaws.com/facesdb/faces_db'
    image_names = ['gen_1850.jpg','gen_1900.jpg','gen_1950.jpg','noisy_0.jpg','noisy_1.jpg']
    pairs = generate_pairs(image_names)
    url_struct = []
    for folder in range(500):
        struct_row = []
        folder_url = base_url + '/' + str(folder)
        struct_row.append(folder_url+'/original.jpg')
        for pair in pairs:
            single_pair = []
            for item in pair:
                single_pair.append(folder_url + '/gen/' + item)
            struct_row.append(single_pair)
        url_struct.append(struct_row)
    return url_struct


def generate_pairs(imgList):
    pairsList = []
    for idx in range(len(imgList)):
        for idx_2 in range(idx+1,len(imgList)):
            if imgList[idx] == 'noisy_0.jpg' and imgList[idx_2] == 'noisy_1.jpg':
                continue # Noisy pair not considered as a pair for comparision
            pair = []
            pair.append(imgList[idx])
            pair.append(imgList[idx_2])
            pairsList.append(pair)
    return pairsList

if __name__ == '__main__':
    url_struct = generate_url_struct()

