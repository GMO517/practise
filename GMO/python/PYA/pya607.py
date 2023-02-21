msg=['1st','2nd','3rd']

scores=[]

for i in range(3):
    score=[]
    print(f'The {msg[i]} student:')
    for j in range(5):
        s=eval(input())
        score.append(s)
    scores.append(score)
    
for i in range(3):
    print(f'Student {i+1}')
    s=sum(scores[i])
    print(f'#Sum {s}')
    a=s/5
    print(f'#Average {a:.2f}')