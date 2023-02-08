set1=set()
print('Input to set1:')
for i in range(5):
    n=eval(input())
    set1.add(n)
    
set2=set()
print('Input to set2:')
for i in range(3):
    n=eval(input())
    set2.add(n)

set3=set()
print('Input to set3:')
for i in range(9):
    n=eval(input())
    set3.add(n)
    
print('set2 is subset of set1:', set2 < set1)
print('set3 is superset of set1:', set3 > set1)

    