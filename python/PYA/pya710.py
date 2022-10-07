dic1={}
while True:
    k=input('Key: ')
    if k=='end':
        break
    v=input('Value: ')
    dic1[k]=v

sk=input('Search key: ')
if dic1.get(sk)==None:
    print(False)
else:
    print(True)