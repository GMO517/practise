score  = ['小徐', 5 ,9 , 6, 8, 7, 10, 6]
lst = []
score.remove(score[0])
ans_1 = max(score)
print(f'最多進了{ans_1}球')


score  = ['小徐', 5 ,9 , 6, 8, 7, 10, 6]
lst = []
score.remove(score[0])
ans_2 = min(score)
print(f'最少進了{ans_2}球')

score  = ['小徐', 5 ,9 , 6, 8, 7, 10, 6]
lst = []
score.remove(score[0])
x = sorted(score)
print(f'最多三次分別進了{x[:3:-1]}')

print(f'最少三次分別進了{x[:3]}')

ans_4 = sum(x)
p = len(x)
ans_5 = ans_4 / p
print(ans_4)
print(sum(x)/len(x))
