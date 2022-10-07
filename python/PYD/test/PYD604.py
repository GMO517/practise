lst = []
for i in range(10):
    n = eval(input())
    lst.append(n)
    
n = 0
c = 0 # C = 眾數紀錄
for x in lst:
    if lst.count(x) > c: #只記錄最大的 
        n = x #小於忽略 大於替換
        c = lst.count(x)
print(n)
print(c)
