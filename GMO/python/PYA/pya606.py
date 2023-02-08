def compute(list1):
    for i in range(len(list1)):
        for j in range(len(list1[i])):
            print(f'{list1[i][j]:4}',end='')
        print()
            
lst=[]
rows=eval(input())
cols=eval(input())
for row in range(rows):
    lst1=[]
    for col in range(cols):
        lst1.append(col-row)
        
    lst.append(lst1)
    
compute(lst)
