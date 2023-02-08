def compute(x):
    if x < 2: #過濾掉0跟1
        return False
    for i in range(2, x-1): #從2除到x
    # for i in range (2, int(x ** 0.5)+1) 程式比較快
        if x % i == 0:
            return False
    return True

n = eval(input())
if compute(n):
    print ('Prime')
else:
    print ('Not Prime')

"""
Prime
Not Prime
"""