f = open('read.dat', 'r', encoding='utf-8')
lines = f.readlines()
f.close()
mc = 0
fc = 0 
print(lines[0])
for i in range(1, len(lines)): #執行次數是檔案行數
    print(lines[i]) #印出讀入的資料
    lst = lines[i].split() #切割
    if lst[2] == '1': #如果性別的位置= 0 or 1 注意是字元
        mc = mc + 1 #女生+1
    else:
        fc = fc + 1 #男生+1
print('Number of males:', mc) 
print('Number of females:', fc)
"""
Number of males: _
Number of females: _
"""