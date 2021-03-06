#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'makingAnagrams' function below.
#
# The function is expected to return an INTEGER.
# The function accepts following parameters:
#  1. STRING s1
#  2. STRING s2
#

def makingAnagrams(s1, s2):
    # Write your code here
    s1 = list(s1)
    s2 = list(s2)
    n = 0
    for i in range(0, len(s1)):
        if(s1[i] in s2):
            n += 1
            s2.remove(s1[i])
    return len(s1) - n + len(s2)
            
            

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    s1 = input()

    s2 = input()

    result = makingAnagrams(s1, s2)

    fptr.write(str(result) + '\n')

    fptr.close()
