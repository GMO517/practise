lst_1 = []
for i in range(19):
    if i % 3 == 0:
        lst_1.append(i)
print(lst_1)

lst_2 = lst_1
lst_2.sort()
print(lst_2[::-1])
print(lst_2[:3:-1])

lst_3 = []
for x in lst_2:
    lst_3.append(x* 10)
    
print(lst_3)

namelst = ['dog', 'cat', 'tiger']
namelst.sort()
newlst = []
for x in namelst:
     n = x.title()
     newlst.append(n)
print(newlst)


namelst = 'Simon Peter John'
afterlst = list(namelst)
for y in range(len(afterlst)):
    a = afterlst[y]
    if a.islower():
        afterlst[y] = '*'
anser=''.join(afterlst)
end = anser.split(' ')
print(end)

