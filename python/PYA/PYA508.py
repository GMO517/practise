def compute(x, y):
    if x%y==0:
        return y
    else:
        return compute(y, x%y)
    '''
    for i in range(x, 1, -1):
        if x%i==0 and y%i==0:
            return i
        
    return 1
    '''


a,b=eval(input())

print(compute(a,b))