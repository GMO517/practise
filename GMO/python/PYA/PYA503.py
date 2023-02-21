def compute(a, b):
    s=0
    for i in range(a, b+1):
        s=s+i
        
    return s

n=eval(input())
m=eval(input())
print(compute(n,m))
