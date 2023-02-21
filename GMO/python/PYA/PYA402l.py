lst=[]

while True:
    num=eval(input())
    if num==9999:
        break
    lst.append(num)
        
print(min(lst))
    
