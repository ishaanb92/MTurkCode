import pandas as pd
import os
import pickle


def return_score(df,url):
    print(url)
    subFrame = df[df['Generated Image'] == url]
    score = subFrame['Graph Based Score']
    return round(score.values[0],2)




with open('cycles.pkl','rb') as f:
    cycle_ids = pickle.load(f)


base_url = 'https://s3-us-west-1.amazonaws.com/facesdb/mutrk_db_fixed'

df = pd.read_csv('scores.csv')

latex_str = ""

for image_id in cycle_ids[:35]:
    graph_image = 'graphs/graph_{}'.format(image_id)+'.png'

    gan_image = 'mturk/gan_{}'.format(image_id) +'.jpg'
    gan_url = base_url + '/' + str(image_id) + '/gen/gan.jpg'
    gan_score = return_score(df=df,url=gan_url)


    ce_image = 'mturk/ce_{}'.format(image_id) +'.jpg'
    ce_url = base_url + '/' + str(image_id) + '/gen/ce.jpg'
    ce_score = return_score(df=df,url=ce_url)

    ae_image = 'mturk/ae_{}'.format(image_id) +'.jpg'
    ae_url = base_url + '/' + str(image_id) + '/gen/ae.jpg'
    ae_score = return_score(df=df,url=ae_url)

    noisy_0_image = 'mturk/noisy_0_{}'.format(image_id) +'.jpg'
    noisy_0_url = base_url + '/' + str(image_id) + '/gen/noisy_0.jpg'
    noisy_0_score = return_score(df=df,url=noisy_0_url)
    latex_str += r"""
        \begin{{figure}}[h]
                \centering
                \includegraphics[scale=0.7]{{{0}}}
        \end{{figure}}

        \begin{{figure}}[h]
        \begin{{subfigure}}{{.5\textwidth}}
          \centering
          \includegraphics[width=.3\linewidth]{{{1}}}
          \caption{{GAN Image. Score : {2}}}
        \end{{subfigure}}%
        \begin{{subfigure}}{{.5\textwidth}}
          \centering
          \includegraphics[width=.3\linewidth]{{{3}}}
          \caption{{AE Image. Score: {4}}}
        \end{{subfigure}}
        \begin{{subfigure}}{{.5\textwidth}}
          \centering
          \includegraphics[width=.3\linewidth]{{{5}}}
          \caption{{CE Image. Score: {6}}}
        \end{{subfigure}}
        \begin{{subfigure}}{{.5\textwidth}}
          \centering
          \includegraphics[width=.3\linewidth]{{{7}}}
          \caption{{Noisy Image. Score: {8}}}
        \end{{subfigure}}
        \end{{figure}}

    """.format(graph_image,gan_image,gan_score,ae_image,ae_score,ce_image,ce_score,noisy_0_image,noisy_0_score)

print(latex_str)

fh = open("appendix.txt", "w")
fh.writelines(latex_str)
fh.close()



