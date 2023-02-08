datas = int(input())

if datas % 400 == 0 or (datas % 4 == 0 and datas % 100 != 0):
    print(f'{datas} is a leap year.')
else:
    print(f'{datas} is not a leap year.')
"""
_ is a leap year.
_ is not a leap year.
"""