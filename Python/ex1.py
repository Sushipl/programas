from random import sample
def enb(st):
    p = sample(st, len(st))
    pa = ''.join(p)
    return pa.lower()
pal = input('Digite uma palavra ')
l = enb(pal)
print(f'{l}', end='')


