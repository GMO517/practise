s=0
n=eval(input())
for x in range(1, n):
    s += 1/(x**0.5+(x+1)**0.5)
print("%.4f" %(s))
