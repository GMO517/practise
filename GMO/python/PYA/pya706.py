n = eval(input())
for i in range(n):
    st=input()
    s1=set(st.lower())
    s1= s1-{' ','.',','}
    if len(s1)==26:
        print(True)
    else:
        print(False)
        
