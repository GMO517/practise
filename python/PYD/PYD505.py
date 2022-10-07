def compute(a, x, y):
    for i in range(y):
        for j in range(x):
            print("%s" %(a), end=' ')
        print()

c = input() #字串不能用eval!!
n = eval(input())
m = eval(input())
compute(c, n, m)