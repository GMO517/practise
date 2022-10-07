ssn=input()
lst=ssn.split('-')
if len(lst)==3:
    for x in lst:
        if not x.isdigit():
            print('Invalid SSN')
            break
    else:
        if len(lst[0])==3 and len(lst[1])==2 and len(lst[2])==4:
            print('Valid SSN')
        else:
            print('Invalid SSN')
            
else:
    print('Invalid SSN')