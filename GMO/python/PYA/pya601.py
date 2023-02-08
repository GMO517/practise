lst=[]
for i in range(12):
    n=eval(input())
    lst.append(n)
    
for i in range(12):
    if i%3==2:
        print(f'{lst[i]:>3}')
    else:
        print(f'{lst[i]:>3}', end='')
        
print(sum(lst[::2]))
