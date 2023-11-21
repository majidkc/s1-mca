list1 = ["blue", "red", "white"]
list2 = ["blue", "black",  "vilot"]
color = list(set(list1).difference(list2))
print(color)