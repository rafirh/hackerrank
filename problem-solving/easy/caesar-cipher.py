#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'caesarCipher' function below.
#
# The function is expected to return a STRING.
# The function accepts following parameters:
#  1. STRING s
#  2. INTEGER k
#

def caesarCipher(s, k):
    # Write your code here
    arr = list(s)
    n = k
    if(k >= 26):
        n = k % 26
    for i in range(len(arr)):
        n = k
        if(k >= 26):
            n = k % 26
        if(ord(arr[i]) >= ord('a') and ord(arr[i]) <= ord('z')):
            if(ord(arr[i]) + n > ord('z')):
                n = (ord(arr[i]) + n) % ord('z')
                arr[i] = chr(ord('a') + n - 1)
            else:
                arr[i] = chr(ord(arr[i]) + n)
        elif(ord(arr[i]) >= ord('A') and ord(arr[i]) <= ord('Z')):
            if(ord(arr[i]) + n > ord('Z')):
                n = (ord(arr[i]) + n) % ord('Z')
                arr[i] = chr(ord('A') + n - 1)
            else:
                arr[i] = chr(ord(arr[i]) + n)
            
    return "".join(arr)
            

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    s = input()

    k = int(input().strip())

    result = caesarCipher(s, k)

    fptr.write(result + '\n')

    fptr.close()
