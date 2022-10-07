lst=[]

for i in range(10):
     n=eval(input())
     lst.append(n)
    
s=sum(lst)
s=s - max(lst)-min(lst)

a=s/8

print(s)
print(f'{a:.2f}')