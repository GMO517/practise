
n=eval(input())

for i in range(1, n+1):
    for j in range(1, n+1):
        print(f'{j:<2}* {i:<2}= {j*i:<4}', end='')
    print()