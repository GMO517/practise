f=open('read.txt','r',encoding='utf-8')
name=[]
t=[]
w=[]

for line in f:
    print(line)
    lst=line.split()
    name.append(lst[0])
    t.append(eval(lst[1]))
    w.append(eval(lst[2]))
    
f.close()
avgT=sum(t)/len(t)
avgW=sum(w)/len(w)
maxT=max(t)
maxTname=name[t.index(maxT)]
maxW=max(w)
maxWname=name[w.index(maxW)]
print(f'Average height: {avgT:.2f}')
print(f'Average weight: {avgW:.2f}')
print(f'The tallest is {maxTname} with {maxT:.2f}cm')
print(f'The heaviest is {maxWname} with {maxW:.2f}kg')

