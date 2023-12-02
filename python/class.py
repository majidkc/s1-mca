class dep:
    def __init__(self,n,r,a):
        self.name = n
        self.adress = r
        self.age = a
    def printout(self):
        print(self.name, self.adress, self.age)

s1 = dep('ram','hariyar','23')
s1.printout()

