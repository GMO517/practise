s1 = set()
print("Input to set1:")
for i in range(5):
    n = eval(input())
    s1.add(n)
    
s2 = set()    
print("Input to set2:")
for i in range(3):
    n = eval(input())
    s2.add(n)
    
s3 = set()    
print("Input to set3:")
for i in range(9):
    n = eval(input())
    s3.add(n)

print('set2 is subset of set1:',s2 < s1)
print('set3 is superset of set1:',s3 > s1)
"""
set2 is subset of set1: _
set3 is superset of set1: _
"""