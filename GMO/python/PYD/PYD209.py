x = eval(input())
y = eval(input())

datas = ((5 - x) ** 2+(6 - y)**2)**0.5

if datas <= 15:
    print(f'Inside')
else:
    print(f'Outside')

"""
Inside
Outside
"""