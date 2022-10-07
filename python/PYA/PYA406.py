while True:
    h=eval(input())
    if h==-9999:
        break
    w=eval(input())
    bmi=w/(h/100)**2
    if bmi<18.5:
        state='under weight'
    elif bmi<25:  # 18.5<=bmi<25
        state='normal'
    elif bmi<30:  # 25<=bmi<30
        state='over weight'
    else:
        state='fat'
    
    print('BMI: %.2f' %(bmi))
    print('State:',state)
    #print(f'BMI: {bmi:.2f}')
    #print(f'State: {state}')
