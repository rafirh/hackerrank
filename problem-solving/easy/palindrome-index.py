#!/bin/python3

import math
import os
import random
import re
import sys
import math

#
# Complete the 'palindromeIndex' function below.
#
# The function is expected to return an INTEGER.
# The function accepts STRING s as parameter.
#

def palindromeIndex(s):
    # Write your code here
    j = len(s) - 1
    for i in range(0, math.floor(len(s)/2)):
        if(s[i] != s[j - i]):
            if(s[i] == s[j - i - 1] and s[i + 1] == s[j - i - 1 - 1]):
                return j - i
            else:
                return i
        if(i == math.floor(len(s)/2) - 1):
            return -1
if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    q = int(input().strip())

    for q_itr in range(q):
        s = input()

        result = palindromeIndex(s)

        fptr.write(str(result) + '\n')

    fptr.close()
