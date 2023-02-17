#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'largestPermutation' function below.
#
# The function is expected to return an INTEGER_ARRAY.
# The function accepts following parameters:
#  1. INTEGER k
#  2. INTEGER_ARRAY arr
#


def largestPermutation(k, arr):
    n = len(arr)
    index_map = {}
    for i, num in enumerate(arr):
        index_map[num] = i

    i = 0
    while k > 0 and i < n:
        if arr[i] == n - i:
            count = 1
            while i + count < n and arr[i + count] == n - (i + count):
                count += 1
            i += count
            continue

        highest = index_map[n - i]
        index_map[arr[i]] = highest
        arr[i], arr[highest] = arr[highest], arr[i]

        i += 1
        k -= 1

    return arr


if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    first_multiple_input = input().rstrip().split()

    n = int(first_multiple_input[0])

    k = int(first_multiple_input[1])

    arr = list(map(int, input().rstrip().split()))

    result = largestPermutation(k, arr)

    fptr.write(' '.join(map(str, result)))
    fptr.write('\n')

    fptr.close()
