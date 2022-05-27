#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'happyLadybugs' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING b as parameter.
#
def unique_list(numbers):

    list_of_unique_numbers = []

    unique_numbers = set(numbers)

    for number in unique_numbers:
        list_of_unique_numbers.append(number)

    return list_of_unique_numbers

def happyLadybugs(b):
    # Write your code here
    unique = unique_list(b)
    if(b.count('_') > 0):
        unique.remove('_')
    
    #RBY_YBR
    count = len(unique)
    j = 0
    result = "NO"
    for i in unique:
        if(b.count(i) > 1):
            j += 1
    if(count == j and b.count('_') > 0) or (count == 0 and b.count('_') > 0):
        result = "YES"
    
    # XXYYZZ
    if(b.count('_') == 0 and len(b) > 1):
        check = 0
        for i in range(len(b)):
            if(i == 0):
                if(b[i] == b[i+1]):
                    check += 1
            elif(i + 1 == len(b)):
                if(b[i] == b[i-1]):
                    check += 1
            else:
                if(b[i] == b[i+1]) or (b[i] == b[i-1]):
                    check += 1
        if(check == len(b)):
            result = "YES"
        
    return result
    
if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    g = int(input().strip())

    for g_itr in range(g):
        n = int(input().strip())

        b = input()

        result = happyLadybugs(b)

        fptr.write(result + '\n')

    fptr.close()
