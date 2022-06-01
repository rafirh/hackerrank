#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'insertionSort2' function below.
#
# The function accepts following parameters:
#  1. INTEGER n
#  2. INTEGER_ARRAY arr
#

def insertionSort2(n, arr):
    # Write your code here
    # for i in range(n - 1):
    #     a = arr[i]   
    #     b = arr[i+1]   
    #     if(a < b):
    #         print(" ".join(map(str, arr)))
    #     else:
    #         arr[i] = b
    #         arr[i+1] = a
    #         print(" ".join(map(str, arr)))
    for i in range(n - 1):
        x = arr[i+1]
        for j in range(i + 1):
            if(x < arr[j]):
                arr.insert(j, x)
                del arr[i+2]
                break
        print(" ".join(map(str, arr)))


if __name__ == '__main__':
    n = int(input().strip())

    arr = list(map(int, input().rstrip().split()))

    insertionSort2(n, arr)
