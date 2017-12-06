import numpy as np
import os
import pandas as pd


def generate_file_struct():
    facesDir =  os.path.join(os.getcwd(),'faces_db')
    dirList = [os.path.join(facesDir, o) for o in os.listdir(facesDir)
              if os.path.isdir(os.path.join(facesDir,o))]
    hit_struct = []
    for direc in dirList:
        dirFiles = [os.path.join(direc, f) for f in list(reversed(sorted(os.listdir(direc))))
                    if os.path.isfile(os.path.join(direc,f))]
        hit_struct.append(np.asarray(dirFiles))
    df = pd.DataFrame(np.asarray(hit_struct))
    df.to_csv('hit_struct.csv',header=False,index=False)



if __name__ == '__main__':
    generate_file_struct()

