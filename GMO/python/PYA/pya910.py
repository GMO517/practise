
f = open("read.dat", "r", encoding="utf-8")
lines=f.readlines()
f.close()
mc=0
fc=0
print(lines[0])
for i in range(1, len(lines)):
    print(lines[i])
    lst=lines[i].split()
    if lst[2]=='1':
        mc=mc+1
    else:
        fc=fc+1
        
print('Number of males:', mc)
print('Number of females:', fc)
        


