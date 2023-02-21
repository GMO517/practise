temp=[]
for i in range(4):
    print(f'Week {i+1}:')
    for j in range(3):
        print(f'Day {j+1}:', end='')
        t=eval(input())
        temp.append(t)
        
a=sum(temp)/12
print(f'Average: {a:.2f}')
high=max(temp)
print('Highest:',high)
low=min(temp)
print('Lowest:', low)
