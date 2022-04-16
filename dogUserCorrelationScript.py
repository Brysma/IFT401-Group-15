#Bryce Ungersma
#IFT402 - FureverDogs Project
#Dog Breed and User Questionnaire Correlation Script
#Last Edited March 19, 2022
import pandas as pd
import numpy as np
from decimal import Decimal

dog_dictionary = pd.read_csv("dogdictionary.csv", header=None)
user_answers = pd.read_csv("userquestionnaire.csv", header=None)
#a = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
#print(a)
#testSeries = pd.Series(a)
#print(testSeries)
#dog_dictionary = dog_dictionary.drop(columns=['dogBreed'])
#dog_dictionary = dog_dictionary.transpose()
#user_answers = user_answers.drop(['name'], axis=1)
#print(dog_dictionary)
#print(user_answers)
c = dog_dictionary.corrwith(user_answers, axis=1)
#print(c)
#s = c.unstack()
so = c.sort_values(kind="quicksort", ascending=False)
for x in range(3):
    print("Your number " + str(x+1) + " result is the colomnName breed.")
    print("Their correlation score is " + str(round(Decimal(so.iloc[x]),3)) + " (Hint: The closer to 1 the better).")


#print(dog_dictionary.corrwith(user_answers, axis=1, drop=True))
