#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'minimumNumber' function below.
#
# The function is expected to return an INTEGER.
# The function accepts following parameters:
#  1. INTEGER n
#  2. STRING password
#

def minimumNumber(n, password):
    # Return the minimum number of characters to make the password strong
    lower = 1
    upper = 1
    special = 1
    digit = 1
    for i in password:
        if(ord(i) >= ord('a') and ord(i) <= ord('z') and (lower == 1)):
            lower = 0
        elif(ord(i) >= ord('A') and ord(i) <= ord('Z')) and (upper == 1):
            upper = 0
        elif((ord(i) >= ord('!') and ord(i) <= ord('/')) or (i == '@')) and (special == 1):
            special = 0
        elif(ord(i) >= ord("0") and ord(i) <= ord("9")) and (digit == 1):
            digit = 0
    required = lower + upper + special + digit
    if(n >= 6):
        return required
    else:
        param = 6 - n
        if(param < required):
            return required
        else:
            return 6 - n
if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    password = input()

    answer = minimumNumber(n, password)

    fptr.write(str(answer) + '\n')

    fptr.close()
