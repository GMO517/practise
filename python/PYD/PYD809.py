p = input()

if  len(p) >= 8:
    if p.isalnum():
        for x in p: #x代表每個字元
            if x.isupper():
                print('Valid password')
                break
        else:
            print('Invalid password')
    else:
            print('Invalid password')
else:
            print('Invalid password')




"""
Valid password
Invalid password
"""