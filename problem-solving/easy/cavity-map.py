#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'cavityMap' function below.
#
# The function is expected to return a STRING_ARRAY.
# The function accepts STRING_ARRAY grid as parameter.
#

def cavityMap(grid):
    # Write your code here
    for i in range(1, len(grid) - 1):
        for j in range(1, len(grid[i]) - 1):
            n = grid[i][j]
            if((grid[i - 1][j] < n and grid[i][j + 1] < n) and (grid[i][j - 1] < n and grid[i + 1][j] < n)):
                arr = list(grid[i])
                arr[j] = 'X'
                grid[i] = "".join(arr)
    return grid
                
if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input().strip())

    grid = []

    for _ in range(n):
        grid_item = input()
        grid.append(grid_item)

    result = cavityMap(grid)

    fptr.write('\n'.join(result))
    fptr.write('\n')

    fptr.close()
