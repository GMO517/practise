n=eval(input())

for i in range(n):
    st=input()
    lst=[eval(x) for x in st.split()]
    diff=max(lst)-min(lst)
    print(f'{diff:.2f}')
    