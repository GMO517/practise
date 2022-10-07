st=input()

if len(st)>=8:
    if st.isalnum():
        for x in st:
            if x.isupper():
                print('Valid password')
                break
        else:
            print('Invalid password')
    else:
        print('Invalid password')
else:
    print('Invalid password')