import json
import random
import nltk
import string
import numpy as np
import pickle
import tensorflow as tf
from nltk.stem import WordNetLemmatizer
from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing.sequence import pad_sequences
import sys
import os

global responses, lemmatizer, tokenizer, le, model, input_shape
input_shape = 11

current_dir = os.path.dirname(os.path.realpath(sys.argv[0]))
project_path = os.path.dirname(current_dir)

# import dataset answer
def load_response():
    global responses
    responses = {}
    with open(project_path + '/python/model/intent.json') as content:
        data = json.load(content)
    for intent in data['intents']:
        responses[intent['tag']]=intent['responses']

# import model dan download nltk file
def preparation():
    load_response()
    global lemmatizer, tokenizer, le, model
    tokenizer = pickle.load(open(project_path + '/python/model/tokenizer.pkl', 'rb'))
    le = pickle.load(open(project_path + '/python/model/labelencoder.pkl', 'rb'))
    model = load_model(project_path + '/python/model/chat_model.h5')
    lemmatizer = WordNetLemmatizer()
    nltk.download('punkt', quiet=True)
    nltk.download('wordnet', quiet=True)
    nltk.download('omw-1.4', quiet=True)

# hapus tanda baca
def remove_punctuation(text):
    texts_p = []
    text = [letters.lower() for letters in text if letters not in string.punctuation]
    text = ''.join(text)
    texts_p.append(text)
    return texts_p

# mengubah text menjadi vector
def vectorization(texts_p):
    vector = tokenizer.texts_to_sequences(texts_p)
    vector = np.array(vector).reshape(-1)
    vector = pad_sequences([vector], input_shape)
    return vector

# klasifikasi pertanyaan user
def predict(vector):
    output = model.predict(vector, verbose = 0)
    output = output.argmax()
    response_tag = le.inverse_transform([output])[0]
    return response_tag

# menghasilkan jawaban berdasarkan pertanyaan user
preparation()
text = str(sys.argv[1])
texts_p = remove_punctuation(text)
vector = vectorization(texts_p)
response_tag = predict(vector)
answer = random.choice(responses[response_tag])
print(answer)