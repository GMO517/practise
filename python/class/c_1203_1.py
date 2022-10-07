def CtoF1(degC):
    degF = degC * 1.8 + 32
    print(f'攝氏{degC}度可以轉換為華氏{degF}度')
    
def CtoF2(degC):
    degF = degC * 1.8 + 32
    return degF

tempC = eval(input('請輸入攝氏溫度: '))

CtoF1(tempC)