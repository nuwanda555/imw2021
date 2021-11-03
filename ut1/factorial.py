

def factorial(n):
    if n>1:
        return n*factorial(n-1)
    else:
        return 1


num=int(input("Dime un número: "))
print (factorial(num))
