while True:
    h = eval(input())

    if h == -9999: #輸入身高為-9999時跳出迴圈
        break
    w = eval(input())
    bmi = w / (h/100) ** 2
    if bmi < 18.5:
        state = 'under weight'
    elif bmi < 25:
        state = 'normal'
    elif bmi < 30:
        state = 'over weight'
    else:
        state = 'fat'
        
    print(f'BMI: {bmi:.2f}')
    print(f'State: {state}')
"""
fat
over weight
normal
under weight
BMI: _
State: _
"""