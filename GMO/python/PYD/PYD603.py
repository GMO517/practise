lst = []
for i in range(10):
    n = eval(input())
    lst.append(n)

lst.sort(reverse = True)

print(f'{lst[0]} {lst[1]} {lst[2]}')
