def compute(n):
    lst=[]
    lst.append(0)
    print('0', end = ' ') #第一項為0
    lst.append(1)
    print('1', end = ' ') #第二項為1
    for i in range(2, n): #從2開始
        lst.append(lst[i - 1] + lst [i - 2]) #費氏數列
        print(lst[i],'', end ='') 
    print()
num = eval(input())
compute(num)