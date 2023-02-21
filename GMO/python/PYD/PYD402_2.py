lst=[]

while True:
    key = eval(input())
    if key == 9999:
        break
    lst.append(key)
print(min(lst))