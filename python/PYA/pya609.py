m1=[]
print('Enter matrix 1:')
for i in range(2):
    m=[]
    for j in range(2):
        print(f'[{i+1}, {j+1}]: ', end='')
        n=eval(input())
        m.append(n)
    m1.append(m)
    
m2=[]
print('Enter matrix 2:')
for i in range(2):
    m=[]
    for j in range(2):
        print(f'[{i+1}, {j+1}]: ', end='')
        n=eval(input())
        m.append(n)
    m2.append(m)
    
print('Matrix 1:')
print(f'{m1[0][0]} {m1[0][1]} ')
print(f'{m1[1][0]} {m1[1][1]} ')

print('Matrix 2:')
print(f'{m2[0][0]} {m2[0][1]} ')
print(f'{m2[1][0]} {m2[1][1]} ')

print('Sum of 2 matrices:')
print(f'{m1[0][0]+m2[0][0]} {m1[0][1]+m2[0][1]} ')
print(f'{m1[1][0]+m2[1][0]} {m1[1][1]+m2[1][1]} ')
