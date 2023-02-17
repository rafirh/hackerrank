import math


def is_smart_number(num):
    val = int(math.sqrt(num))
    if sum(1 for i in range(1, num+1) if num % i == 0) % 2 == 1:
        return True
    return False


for _ in range(int(input())):
    num = int(input())
    ans = is_smart_number(num)
    if ans:
        print("YES")
    else:
        print("NO")
