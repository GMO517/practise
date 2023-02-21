def isPrime(n):
    for i in range(2, int(n**0.5)+1):
        if n % i == 0:
            return False
    return True
        
n = eval(input())
while n > 2:
    print(f'{n},', end = '')
    diff = n
    for a in range(2, n//2 + 1):
        if isPrime(a) and isPrime(n - a):
            if abs(a - (n - a)) < diff:
                diff = abs(a - (n - a))
    n = diff
print(f'{n},')
    
        