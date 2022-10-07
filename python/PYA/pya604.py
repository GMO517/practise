lst=[]
for i in range(10):
    n=eval(input())
    lst.append(n)

n=0
c=0

for x in lst:
    if lst.count(x)>c:
        n=x
        c=lst.count(x)
        
print(n)
print(c)
