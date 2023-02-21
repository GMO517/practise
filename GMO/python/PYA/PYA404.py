num=eval(input())

if num==0:
    print(num)
else:
    while num > 0:
        print(num%10,end='')
        num=num//10
        
    print()
    