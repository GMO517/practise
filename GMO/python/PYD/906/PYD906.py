fn = input()
s1 = input()
s2 = input()
f = open(fn, 'r', encoding='utf-8')
print('=== Before the replacement')
datas = f.read()
print(datas)
print('=== After the replacement')
print(datas.replace(s1, s2))
#字串內容不能被更改 所以要取代
f.close()






