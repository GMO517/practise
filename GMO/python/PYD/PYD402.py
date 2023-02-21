m = 9999

while True:
    key = eval(input())
    if key == 9999:
        break
    if key < m:
        m = key
print(m)