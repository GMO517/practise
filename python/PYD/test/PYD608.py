lst = []
for i in range(9):
    n = eval(input())
    lst.append(n)

m = max(lst)
mi = lst.index(m) #"(串列名)".index(x) 取x在串列裡的索引值
print(f'Index of the largest number {m} is: ({mi // 3}, {mi % 3})') #//n 是除n 取"商"
n = min(lst)
ni = lst.index(n)
print(f'Index of the smallest number {n} is: ({ni // 3}, {ni % 3})')


"""
Index of the largest number _ is: (_, _)
Index of the smallest number _ is: (_, _)
"""