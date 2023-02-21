f = open("read.txt", 'r', encoding = 'utf-8')
# with open("read.txt", 'r', encoding = 'utf-8'):f 後面要內縮
datas = f.read()
lst = [eval(x) for x in datas.strip().split()]
print(sum(lst))
f.close()

