lst=[]
while True:
    s=input()
    if s=='end':
        break
    lst.append(s)
    
tpl=tuple(lst)
print(tpl)
print(tpl[:3])
print(tpl[-3:])