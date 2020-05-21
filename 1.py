def no1(a , b):
    if a > 200000:
        a = a - a*10/100
        b = int(b-a)
        print("total kembalian",b)
        hasil=int(b/50000)
        sisa=b%50000
        print (hasil, "x 50.0000")
        if (sisa>=20000):
            hasil=int(sisa/20000)
            sisa=sisa%20000
            print (hasil, "x 20.0000")
        if (sisa>=10000):
            hasil=int(sisa/10000)
            sisa=sisa%10000
            print (hasil, "x 10.000")
        if (sisa>=5000):
            hasil=int(sisa/5000)
            sisa=sisa%5000
            print (hasil, "x 5.000")
        if sisa<5000:
            print(sisa,"Disumbangkan karena tidak ada pecahan dibawah 5000")      
            
    else:
        b = b-a
        print("total kembalian",b)
        hasil=int(b/50000)
        sisa=b%50000
        print (hasil, "x 50.0000")
        if (sisa>=20000):
            hasil=int(sisa/20000)
            sisa=sisa%20000
            print (hasil, "x 20.0000")
        if (sisa>=10000):
            hasil=int(sisa/10000)
            sisa=sisa%10000
            print (hasil, "x 10.000")
        if (sisa>=5000):
            hasil=int(sisa/5000)
            sisa=sisa%5000
            print (hasil, "x 5.000")
        if sisa<5000:
            print(sisa,"Disumbangkan karena tidak ada pecahan dibawah 5000")  
    
while True:
    a = int(input("masukan total belanjaan = "))
    b = int(input("masukan jumlah uang = "))
    no1(a,b)
