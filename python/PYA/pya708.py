dic1={}
print('Create dict1:')
while True:
    k=input('Key: ')
    if k=='end':
        break
    v=input('Value: ')
    dic1[k]=v

dic2={}
print('Create dict2:')
while True:
    k=input('Key: ')
    if k=='end':
        break
    v=input('Value: ')
    dic2[k]=v
    

dic1.update(dic2)

lst=list(dic1.keys())
lst.sort()
for k in lst:
    print(f'{k}: {dic1[k]}')




    