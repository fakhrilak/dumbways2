def no4(string):
    splits = []
    pos = -1
    last_pos = -1
    while ' ' in string[pos +1:]:
        pos = string.index( ' ',pos +1)
        splits.append(string[last_pos + 1:pos])
        last_pos = pos
        
    splits.append(string[last_pos + 1:])
    print(len(splits),"terdiri dari ",splits)
string = input("masukan kalimat = ") 
no4(string)
