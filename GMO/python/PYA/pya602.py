lst=[]

for i in range(5):
    s=input()
    if s=='A':
        lst.append(1)
    elif s=='J':
        lst.append(11)
    elif s=='Q':
        lst.append(12)
    elif s=='K':
        lst.append(13)
    else:
        lst.append(eval(s))
        
print(sum(lst))
    