len1 = int(input("enter the length of the list1:"))
len2 = int(input("enter the length of the list2:"))
list1 = []
list2 = []

for i in range(len1):
    a = int(input("enter the number to first list:"))
    list1.append(a)
print(list1)

for i in range(len2):
    b = int(input("enter the number to second list:"))
    list2.append(b)
print(list2)

if len(list1) == len(list2):
    print("both list have same length")
else:
    print("lists are different length")

if sum(list1) == sum(list2):
    print("Both have same sum")
else:
    print("different sum")

sum1 = sum(list1)
print("list1 sum -",sum1)
sum2 = sum(list2)
print("list2 sum -",sum2)


inter = list(set(list1).intersection(list2))
if inter:
    print("intersection",inter)
else:
    print("no common elements:")

    