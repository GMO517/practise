n = eval(input())
#for i in range(n): #幾行
    #for j in range(n - 1 - i):
        
for i in range(1, n + 1): #1~n 中間有n個
    for j in range(n - i): #每行空格總數是n-第i行
        print(' ',end='')
    for k in range(2 * i - 1): #*數量是兩倍n再-1
        print('*',end='')
    print()

        