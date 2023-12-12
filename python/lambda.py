x = lambda a, b:a*b
len = int(input("enter the length"))
bred = int(input("enter the breadth"))
y = x(len, bred)
print("area of square = ",y)

x = lambda a:a*a
side = int(input("enter the side of square"))
y = x(side)
print("area of square",y)

x = lambda b,h:0.5*b*h
base = int(input("enter the base"))
height = int(input("enter the height"))
y = x(base,height)
print("are of triangle",y)