#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'anagram' function below.
#
# The function is expected to return an INTEGER.
# The function accepts STRING s as parameter.
#

def anagram(s):
    # Write your code here
    l = []
    r = []
    if(len(s) % 2 == 0):
        j = math.floor(len(s)) - 1
        for i in range(0, math.floor(len(s)/2)):
            l.append(s[i]);
            r.append(s[j - i]);
        for j in range(0, len(l)):
            if(r[j] in l):
                l.remove(r[j])
        return len(l)
    else:
        return -1

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    q = int(input().strip())

    for q_itr in range(q):
        s = input()

        result = anagram(s)

        fptr.write(str(result) + '\n')

    fptr.close()
