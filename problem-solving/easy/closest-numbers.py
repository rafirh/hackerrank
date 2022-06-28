#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'closestNumbers' function below.
#
# The function is expected to return an INTEGER_ARRAY.
# The function accepts INTEGER_ARRAY arr as parameter.
#

def closestNumbers(arr):
    # Write your code here
    arr.sort()
    result = []
    n = arr[1] - arr[0]
    # for i in range(0, len(arr) - 1):
    #     print(str(arr[i + 1]) + ' - ' + str(arr[i]) + ' = ' + str(arr[i + 1] - arr[i]))
    for i in range(0, len(arr) - 1):
        diff = arr[i + 1] - arr[i]
        if(diff < n):
            n = diff
            result = [arr[i], arr[i + 1]]
        elif(diff == n):
            result.append(arr[i])
            result.append(arr[i + 1])
    return result
        

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    arr = list(map(int, input().rstrip().split()))

    result = closestNumbers(arr)

    fptr.write(' '.join(map(str, result)))
    fptr.write('\n')

    fptr.close()
