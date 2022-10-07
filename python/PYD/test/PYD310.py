n = eval(input())
s = 0
for i in range(1,n):
    s += 1/((i + 1)**0.5 + i**0.5)
print(f'{s:.4f}')