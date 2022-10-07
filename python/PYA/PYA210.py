a=eval(input())
b=eval(input())
c=eval(input())

if a+b>c and b+c>a and c+a>b:
    print(a+b+c)
else:
    print('Invalid')