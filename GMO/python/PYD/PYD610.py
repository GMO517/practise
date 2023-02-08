temp = []
for i in range(4):
    print(f'Week {i+1}')
    for j in range(3):
        print(f'Day {j+1}:', end = '')
        t = eval(input())
        temp.append(t)

a = sum(temp) / 12
print(f'Average: {a:.2f}')

h = max(temp)
print(f'Highest: {h}')

l = min(temp)
print(f'Lowest: {l}')





"""
Week _:
Day _: 
Average: _
Highest: _
Lowest: _
"""