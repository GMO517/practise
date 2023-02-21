def compute(s, c):
    return s.count(c)

st=input()
ch=input()

print(f'{ch} occurs {compute(st,ch)} time(s)')