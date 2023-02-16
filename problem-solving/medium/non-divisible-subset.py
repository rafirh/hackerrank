#!/bin/python3

import math
import os
import random
import re
import sys
from collections import OrderedDict

#
# Complete the 'nonDivisibleSubset' function below.
#
# The function is expected to return an INTEGER.
# The function accepts following parameters:
#  1. INTEGER k
#  2. INTEGER_ARRAY s
#


def nonDivisibleSubset(k, s):
    d = {x: [] for x in range(k)}
    for i in range(n):
        d[s[i] % k].append(s[i])
    count = 0
    if len(d[0]) > 0:
        count = 1
    S = set([(x, k-x) for x in range(1, k//2+1)])
    for i, j in S:
        if i != j:
            if len(d[i]) > len(d[j]):
                count += len(d[i])
            else:
                count += len(d[j])
        else:
            if len(d[i]) > 0:
                count += 1
    return count

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    first_multiple_input = input().rstrip().split()

    n = int(first_multiple_input[0])

    k = int(first_multiple_input[1])

    s = list(map(int, input().rstrip().split()))

    result = nonDivisibleSubset(k, s)

    fptr.write(str(result) + '\n')

    fptr.close()
