k = eval(input())

for i in range(k):
    datas = input()
    d1 = set(datas.lower()) #統一小寫
    d1 = d1 - {' ','.',','} #從集合去掉
    if len(d1) == 26:
        print(True)
    else:
        print(False)
