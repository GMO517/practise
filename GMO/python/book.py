
co = eval(input('請輸入身上銅書數量:'))
so = eval(input('請輸入身上銀書數量:'))
go = eval(input('請輸入身上金書數量:'))

cn = eval(input('需求銅書數量:'))
sn = eval(input('需求銀書數量:'))
gn = eval(input('需求金書數量:'))


a = co - cn  # 先扣完
if a >= 0:
    cto = int(a/3)
    print(f'你不缺銅書')
else:
    cto = 0
    a = -a
    print(f'你缺{a}本銅書')

b = so - sn + cto
if b >= 0:
    sto = int(b/3)
    print(f'你不缺銀書')
else:
    sto = 0
    b = -b
    print(f'你缺{b}銀書')

c = go - gn + sto
if c >= 0:
    print(f'你不缺金書')
else:
    c = -c
    print(f'你缺{c}金書')
