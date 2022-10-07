def compute(a, b):
    
    s=0
    for i in range(a,b+1):
        s=s+i
        
    return s

a = eval(input())
b = eval(input())
print(compute(a,b))