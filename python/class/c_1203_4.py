def isPrime(n):
    for i in range(2, int(n**0.5)+1):
        if n % i == 0:
            return False
    return True
        

n = eval(input())
if n == 0 or n == 1:
        print('error')
for i in range(n - 1, 1, -1):
    if isPrime(i):
         print(i)
         break
