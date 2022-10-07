f = open("read.txt", "r", encoding="utf-8")

datas=f.read()
lst=[eval(x) for x in datas.split()]
print(sum(lst))
f.close()
