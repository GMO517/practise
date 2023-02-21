def compute(n):
    lst=[]
    lst.append(0)
    print('0 ',end='')
    lst.append(1)
    print('1 ',end='')
    for i in range(2,n):
        lst.append(lst[i-1]+lst[i-2])
        print(lst[i],'',end='')
    print()
    
num=eval(input())
compute(num)
        
