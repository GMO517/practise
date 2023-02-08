import tkinter as tk
from unittest import result


def showTotal():

    co = int(co_entry.get())
    so = int(so_entry.get())
    go = int(go_entry.get())
    cn = int(cn_entry.get())
    sn = int(sn_entry.get())
    gn = int(gn_entry.get())
    a = co - cn  # 先扣完

    if a >= 0:
        cto = int(a/3)
        ans1_Label["text"] = "不缺銅書"
    else:
        cto = 0
        a = -a
        ans1_Label["text"] = (f'缺{a}本')

    b = so - sn + cto
    if b >= 0:
        sto = int(b/3)
        ans2_Label["text"] = "不缺銀書"
    else:
        sto = 0
        b = -b
        ans2_Label["text"] = (f'缺{b}本')

    c = go - gn + sto
    if c >= 0:
        ans3_Label["text"] = "不缺金書"
    else:
        c = -c
        ans3_Label["text"] = (f'缺{c}本')


root = tk.Tk()
root.title('素材計算機')
ans1 = 0
ans2 = 0
ans3 = 0

co_label = tk.Label(root, text='銅素材', width=5)
co_label.grid(row=0, column=0)
so_label = tk.Label(root, text='銀素材', width=5)
so_label.grid(row=1, column=0)
go_label = tk.Label(root, text='金素材', width=5)
go_label.grid(row=2, column=0)

co_entry = tk.Entry(root, width=5)
co_entry.grid(row=0, column=1)
so_entry = tk.Entry(root, width=5)
so_entry.grid(row=1, column=1)
go_entry = tk.Entry(root, width=5)
go_entry.grid(row=2, column=1)

cn_label = tk.Label(root, text='銅需求', width=5)
cn_label.grid(row=0, column=2)
sn_label = tk.Label(root, text='銀需求', width=5)
sn_label.grid(row=1, column=2)
gn_label = tk.Label(root, text='金需求', width=5)
gn_label.grid(row=2, column=2)


cn_entry = tk.Entry(root, width=5)
cn_entry.grid(row=0, column=3)
sn_entry = tk.Entry(root, width=5)
sn_entry.grid(row=1, column=3)
gn_entry = tk.Entry(root, width=5)
gn_entry.grid(row=2, column=3)

ansLabel = tk.Label(root, text='結果', width=5)
ansLabel.grid(row=1, column=4)

ans1_Label = tk.Label(root)
ans1_Label.grid(row=0, column=5)
ans2_Label = tk.Label(root)
ans2_Label.grid(row=1, column=5)
ans3_Label = tk.Label(root)
ans3_Label.grid(row=2, column=5)


mybutton = tk.Button(root, text='送出', command=showTotal)
mybutton.grid(row=3, column=0)


root.mainloop()
