lst=[]
for i in range(9):
    n=eval(input())
    lst.append(n)
    
m=max(lst)
mi=lst.index(m)
print(f'Index of the largest number {m} is: ({mi//3}, {mi%3})')
n=min(lst)
ni=lst.index(n)
print(f'Index of the smallest number {n} is: ({ni//3}, {ni%3})')