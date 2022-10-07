datas = input()
s = 0

for x in  datas:
    s = s + ord(x) #加總
    print(f"ASCII code for '{x}' is {ord(x)}")

print(s)


"""
ASCII code for '_' is _
"""