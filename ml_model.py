import os
import random
from pathlib import Path

import keras.utils
import tensorflow as tf
import tensorflow_ranking as tfr

data = []
primes = []
keywords = ["add", "delete", "edit", "implement", "comment", "create", "update", "fix", "set", "use", "provide", "text",
            "write", "read", "dm", "call", "email", "tell", "prevent", "notify", "finish", "convert", "do", "buy",
            "deliver", "execute", "test", "sell", "open", "close", "stop", "continue", "cancel", "build", "merge",
            "replace", "swap", "fax", "mail", "important", "vital", "soon", "urgent", "emergency", "address", "issue",
            "problem", "discontinue", "take", "find"]

n = len(keywords)


def encode_text(text):
    text = text.lower()
    text = text.translate({ord(i): ' ' for i in '.,/!?[]()*&_-\\|#'})
    enc = []
    for i in range(n):
        enc.append(1/(1+text.count(keywords[i])))
    return enc


train_data = []
train_prios = []

for f in os.listdir('data/train/tasks'):
    train_data.append(encode_text(open('data/train/tasks/' + f).read()))
    ls = [0 for i in range(10)]
    ls[int(open('data/train/rating/' + f).read())] = 1
    train_prios.append(ls)


model = tf.keras.Sequential([
    tf.keras.layers.Dense(128, activation='relu', input_dim=n),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(10, activation='softmax')
])

model.compile(optimizer='adam',
              loss='categorical_crossentropy',
              metrics=['accuracy'])

model.fit(train_data, train_prios, epochs=300)

test_data = []

for f in os.listdir('data/test'):
    test_data.append(encode_text(open('data/test/' + f).read()))


for ls in model.predict(test_data):
    res = 0
    for i in range(10):
        res += (i+1) * ls[i]

    print(ls)
    print(res)
