#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'funnyString' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING s as parameter.
#

def funnyString(s):
    # Write your code here
    rs = list(s)
    rs.reverse()
    result = [[], []]
    for i in range(0, len(s) - 1):
        result[0].append(abs(ord(s[i]) - ord(s[i + 1])))
        result[1].append(abs(ord(rs[i]) - ord(rs[i + 1])))
    if(result[0] == result[1]):
        return "Funny"
    else:
        return "Not Funny"
        
if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    q = int(input().strip())

    for q_itr in range(q):
        s = input()

        result = funnyString(s)

        fptr.write(result + '\n')

    fptr.close()
