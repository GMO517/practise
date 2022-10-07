def compute(x, y):
    if x % y == 0:
        return y
    else:
        return compute(y, x % y) #輾轉相除法

a, b = eval(input())

print (compute(a, b))
    