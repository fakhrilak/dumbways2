####pengurangan jam = 3 : 34 : 45
a = int(5*3600+25*60+12)
b = int(9*3600)
c = b-a
print("waktu tempuh = ",c)
interval = 7*60
print("interval penambahan  kec (detik) = ",interval)
jaminterval = c/interval
sisawaktu = c%interval
print("penambagan kecepatan terahir ", jaminterval ,
      "kali dan sisa detik kec terakhir",sisawaktu)
v = 3
totjarak = 0
i = 1
while i <=jaminterval:
    jarak = interval*v
    totjarak = totjarak+jarak;

    v = v+1
    i = i + 1
    break
print("sisa detik yang harus ditempuh : ",sisawaktu,"dengan kecepatan",v)
sisajarak = sisawaktu * v;
print("sehingg jarak sisa : ",sisajarak)
totjarak = totjarak+sisajarak;
print("total jarak yang ditempuh = ",totjarak,"meter")
