ec=0
oc=0
for i in range(10):
    num=eval(input())
    if num%2==0:
        ec=ec+1
    else:
        oc=oc+1
        
print('Even numbers:', ec)
print('Odd numbers:', oc)