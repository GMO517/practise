f=open("read.txt", "r", encoding = 'utf-8')
name = []
h = []
w = [] 
for line in f:
    print(line)
    lst = line.split()
    name.append(lst[0])
    h.append(eval(lst[1]))
    w.append(eval(lst[2]))
    
f.close()
avgH = sum(h) / len(h)
avgW = sum(w) / len(w)

maxH = max(h)
maxHname = name[h.index(maxH)] #找最高的人名字

maxW = max(w)
maxWname = name[w.index(maxW)] #找最重的人名字

print(f'Average height: {avgH:.2f}')
print(f'Average weight: {avgW:.2f}')
print(f'The tallest is {maxHname} with {maxH:.2f}cm')
print(f'The heaviest is {maxWname} with {maxW:.2f}kg')
"""
Average height: _
Average weight: _
The tallest is _ with _cm
The heaviest is _ with _kg
"""