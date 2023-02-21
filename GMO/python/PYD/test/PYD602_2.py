lst = []

total = 0
for i in range(5):
    x = input()
    if x == 'A':
        lst.append(1)
    elif  x == 'J':
        lst.append(11)
    elif  x == 'Q':
        lst.append(12)
    elif  x == 'K':
        lst.append(11)    
    else:
        lst.append(eval(input()))
    
print(sum(lst))