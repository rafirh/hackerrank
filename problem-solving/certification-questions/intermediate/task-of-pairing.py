#!/bin/python3

import math
import os
import random
import re
import sys



#
# Complete the 'taskOfPairing' function below.
#
# The function is expected to return a LONG_INTEGER.
# The function accepts LONG_INTEGER_ARRAY freq as parameter.
#

def taskOfPairing(freq):
    # Write your code here
    result = 0
    for i in range(0, len(freq)):
        result += freq[i]
        if len(freq) - 1 != i:
            if(freq[i + 1] == 0 and result % 2 != 0):
                result -= 1        
    return math.floor(result/2)

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    freq_count = int(input().strip())

    freq = []

    for _ in range(freq_count):
        freq_item = int(input().strip())
        freq.append(freq_item)

    result = taskOfPairing(freq)

    fptr.write(str(result) + '\n')

    fptr.close()
