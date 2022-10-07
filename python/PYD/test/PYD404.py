num = eval(input())

if num == 0:
    print(num)
else:
    while num > 0: #無限執行到輸入資料被除到0為止
        print(num % 10,end = '') #取最後一數
        num = num // 10 #扣最後一數
    print()