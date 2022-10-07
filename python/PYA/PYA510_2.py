def compute(n):
    print('0 ',end='')
    print('1 ',end='')
    a=0
    b=1
    for i in range(2,n):
        print(a+b,'',end='')
        a,b=b, a+b
    print()
    
num=eval(input())
compute(num)
        
