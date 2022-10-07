def compute(x):
    if x < 2:
        return False
    for i in range(2, int(x**0.5)+1):
        if x%i==0:
            return False
    return True

n=eval(input())
if compute(n):
    print('Prime')
else:
    print('Not Prime')