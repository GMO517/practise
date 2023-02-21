num=eval(input())

if num==0:
    print(num)
else:
    while num!=0:
        d=num%10
        print(d,end='')
        num=num//10
        
    print()

