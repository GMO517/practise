lst = ['Company 1', 'Company 2' , 'Company 3']
newlst = []
for x in lst:
    a = x.replace(" ", '_')
    newlst.append(a)
print(newlst)


ans_8 = ([m+n for m in'123456' for n in '$'])
ans_9 = []
for y in ans_8:
    b = y.replace('$', '')
    ans_9.append(b)
print(ans_9)


lst1 =  [1,2,3,4]
lst2 =  [5,6,7,8]
lst3 = list(zip(lst1,lst2))
print(lst3)
