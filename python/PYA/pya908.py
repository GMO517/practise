fn=input()
n=eval(input())

f=open(fn,"r",encoding="utf-8")
datas=f.read()
f.close()

lst=datas.split()

set1=set(lst)

lst2=list(set1)
lst2.sort()
for x in lst2:
    if lst.count(x)==n:
        print(x)


