def compute(x, y):
    if x % y == 0:
        return y
    else:
        return compute(y, x % y)

x, y = eval(input())
m, n = eval(input())
p = x * n + y * m  #通分算法
q = n * y
gcd = compute(p, q) #最大公因數
# print('%d/%d + %d/%d = %d/%d'%(x, y, m, n,p // gcd,q // gcd))
print('{}/{}+{}/{} = {}/{}'.format(x, y, m, n,p // gcd,q // gcd))