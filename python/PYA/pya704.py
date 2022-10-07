s1=set()
while True:
    n=eval(input())
    if n==-9999:
        break
    s1.add(n)
    
print('Length:', len(s1))
print('Max:', max(s1))
print('Min:',min(s1))
print('Sum:', sum(s1))