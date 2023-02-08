lst1 = []
lst2 = []
print("Create tuple1:")
while True:
    n = eval(input())
    if n == -9999:
        break
    lst1.append(n)
    
tpl1 = tuple(lst1)

print("Create tuple2:")
while True:
    n = eval(input())
    if n == -9999:
        break
    lst2.append(n)
    
tpl2 = tuple(lst2) 


print(f'Combined tuple before sorting: {tpl1+tpl2}')
lst = list(tpl1 + tpl2)
lst.sort()
print(f'Combined list after sorting: {lst}')


"""
Combined tuple before sorting: _
Combined list after sorting: _
"""
