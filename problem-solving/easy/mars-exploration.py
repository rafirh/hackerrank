#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'marsExploration' function below.
#
# The function is expected to return an INTEGER.
# The function accepts STRING s as parameter.
#

def marsExploration(s):
    # Write your code here
    result = 0
    sos = []
    for i in s:
        sos.append(i)
        if(len(sos) == 3):
            arr = ('S','O','S')
            for j in range(len(sos)):
                if sos[j] != arr[j]:
                    result += 1
            sos = []
    return result

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    s = input()

    result = marsExploration(s)

    fptr.write(str(result) + '\n')

    fptr.close()
