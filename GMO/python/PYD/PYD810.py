k = eval(input())
for i in range(k):
    d = input()
    lst=[eval(x) for x in d.split()] 
    #空白切割掉轉數值
    diff = max(lst) - min(lst)
    print(f'{diff:.2f}')