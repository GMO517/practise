def swap(a, b):
    temp = lst[0]
    lst[0] = lst[1]
    lst[1] = temp
    
a = 1
b = 2
lst = [a, b]
print(lst)
swap(lst)
print(lst)