#!/bin/python3

import math
import os
import random
import re
import sys

def getLowerNearestMultiple(n, multiple):
    return (n // multiple) * multiple

def decentNumber(n):
    is_printDefault = True
    nearestMultiple3 = getLowerNearestMultiple(n, 3)
    for i in range(nearestMultiple3, 0, -3):
        if (n - i) % 5 == 0:
            print(("5" * i) + ("3" * (n - i)))
            is_printDefault = False
            break
    if n % 5 == 0 and is_printDefault:
        print("3" * n)
    elif is_printDefault:
        print("-1")


if __name__ == '__main__':
    t = int(input().strip())

    for t_itr in range(t):
        n = int(input().strip())

        decentNumber(n)
