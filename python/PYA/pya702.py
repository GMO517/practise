lst=[]
print('Create tuple1:')
while True:
    n=eval(input())
    if n==-9999:
        break
    lst.append(n)
    
tpl1=tuple(lst)

lst=[]
print('Create tuple2:')
while True:
    n=eval(input())
    if n==-9999:
        break
    lst.append(n)
    
tpl2=tuple(lst)

print('Combined tuple before sorting:',tpl1+tpl2)
lst=list(tpl1+tpl2)
lst.sort()
print('Combined list after sorting:', lst)