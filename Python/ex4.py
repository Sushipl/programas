def mi(v):
    for i, c in enumerate(v):
        if c.lower() == 'a' or c.lower() == 'e':
            print(c, i)
        else:
            continue
            
mi('aeaeaba')