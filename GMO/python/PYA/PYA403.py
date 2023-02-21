a=eval(input())
b=eval(input())
c=0
s=0
for i in range(a, b+1):
    if i%4==0 or i%9==0:
        c=c+1
        s=s+i
        if c%10==0:
            print('%-4d' %(i))
            #print(f'{i:<4}')
        else:
            print('%-4d' %(i), end='')
            #print(f'{i:<4}', end='')

if c%10!=0:
    print()
print(c)
print(s)