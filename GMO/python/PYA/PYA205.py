char = input()

if 'A'<=char<='Z' or 'a'<=char<='z':
    print(f'{char} is an alphabet.')
elif '0'<=char<='9':
    print(f'{char} is a number.')
else:
    print(f'{char} is a symbol.')