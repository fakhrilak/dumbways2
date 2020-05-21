def no2(a):
    for i in range(a) :
        for j in range(a) :
                if i==0 or i==a-1 or j==0 or j==a-1 :
                    print ("*",end=" ")
                elif i==a/2-0.5:
                    print ("*",end=" ")
                else :
                    print("=",end=" ")
        print ("")

while True:
    a=int(input("Masukin angkamu : "))
    b=a%2
    if b == 1:
        no2(a)
    else:
        print("masukan angka ganjil ya")
