a = {6:1 ,3:3 ,1:4 ,2:2 ,21:5 ,43:3 ,23:2}
a1 = {}
a2 = {}
for i in sorted(a):
    a1[i] = a[i]
print(a1)

for i in sorted(a,reverse=True):
    a2[i] = a[i]
print(a2)
