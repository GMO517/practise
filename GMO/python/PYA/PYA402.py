m=9999

while True:
    num=eval(input())
    if num==9999:
        break
    if num < m:
        m=num
        
print(m)
    
