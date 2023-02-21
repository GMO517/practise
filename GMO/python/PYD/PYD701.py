lst = []
while True:
    n = eval(input())
    if n == -9999:
        break
    lst.append(n)

tpl = tuple(lst)
print(tpl)
print('Length:',len(tpl))
print('Max:',max(tpl))
print('Min:',min(tpl))
print('Sum:',sum(tpl))


"""
Length: _
Max: _
Min: _
Sum: _
"""