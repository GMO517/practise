d = input()
lst = d.split('-') #利用-切割成三分來判斷
if len(lst) == 3: #判斷是不是三組
    for x in lst:
        if not x.isdigit(): #不是數字就跳出迴圈
            print('Invalid SSN')
            break
    else:
        if len(lst[0])==3 and len(lst[1])==2 and len(lst[2])==4: #判定第n項長度
            print('Valid SSN')
        else:
            print('Invalid SSN')
else: #對齊注意
    print('Invalid SSN')
"""
Valid SSN
Invalid SSN
"""