n=eval(input())
for i in range(n):
    num=eval(input())
    s=0
    num1=num
    while num1!=0:
        s=s+num1%10
        num1=num1//10
    print(f'Sum of all digits of {num} is {s}')
        