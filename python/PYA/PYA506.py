def compute(a,b,c):
    delta=b**2-4*a*c
    if delta <0:
        return 'Your equation has no root.'
    else:
        ans1=(-b+delta**0.5)/(2*a)
        ans2=(-b-delta**0.5)/(2*a)
        return '{}, {}'.format(ans1,ans2)
        #return f'{ans1}, {ans2}'
        
a=eval(input())
b=eval(input())
c=eval(input())
print(compute(a,b,c))


        