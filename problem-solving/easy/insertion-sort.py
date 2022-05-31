#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'insertionSort1' function below.
#
# The function accepts following parameters:
#  1. INTEGER n
#  2. INTEGER_ARRAY arr
#

def insertionSort1(n, arr):
    # Write your code here
    i = n - 2
    e = arr[n - 1]
    a = arr
    del a[n - 1]
    
    while True:
        array = a
        if(array[i] > e) and (i != -1):
            array.insert(i, array[i])
            print(" ".join(map(str, array)))
            del array[i]
        elif(i == 0) and (array[i] > e):
            array.insert(i, e)
            print(" ".join(map(str, array)))
            del array[i+1]
            break
        else:
            array.insert(i+1, e)
            print(" ".join(map(str, array)))
            del array[i+1]
            break
        i -= 1
            
if __name__ == '__main__':
    n = int(input().strip())

    arr = list(map(int, input().rstrip().split()))

    insertionSort1(n, arr)
