def printPattern(n) :
	k = 0; 
	for i in range(1,n+1) :
		for j in range(-1,n-i+1) : 
			print(" ",end="")
		while (k != (2 * i - 1)) :
			if (k == 0 or k == 2 * i - 2) : 
				print("*",end="")
			elif (k == i-1): 
				print("*",end="")
			elif (j == 0): 
				print("*",end="")
			else :
				print(" ",end="")
			k = k + 1
		k = 0
		print(""),
	n = n - 1
	for i in range (n,0,-1) :
		for j in range(-2,n-i+1) : 
			print(" ",end="")
		k = 0
		while (k != (2 * i - 1)) : 
			if (k == 0 or k == 2 * i - 2) : 
				print("*",end="")
			elif (k==i-1) : 
				print("*",end="")
			else : 
				print(" ",end="") 
			k = k + 1
		print("")
while True:
    n = int(input("masukan angka = "))
    b=n%2
    if b ==1:
        printPattern(n)
    else:
        print("masukan angka ganjil ya")
