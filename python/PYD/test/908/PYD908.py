fn = input()
n = eval(input())

f = open(fn, 'r', encoding = 'utf-8')
datas = f.read()
f.close()

lst = datas.split() #切割

set1 = set(lst) #集合不會重複所以弄成集合
lst2 = list(set1) #轉回串列
lst2.sort() #排序
for x in lst2:
    if lst.count(x) == n:
        print(x)