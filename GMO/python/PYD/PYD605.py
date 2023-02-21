lst = []
for i in range(10):
    n = eval(input())
    lst.append(n)
s = sum(lst) #先加總
s = s - max(lst) - min(lst) #後扣除最大最小
ans = s/8 #算平均
print(s)
print(f'{ans:.2f}')