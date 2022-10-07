datas = input()

if datas>8000 and <= 18000:
    print(f'{datas*0.95}')
elif datas>=18000 and <= 28000:
    print(f'{datas*0.9}')
elif datas>=28000 and <= 38000:
    print(f'{datas*0.8}')
elif datas>=38000:
    print(f'{datas*0.7}')
else:
    print(f'{datas}')