import pandas as pd
import matplotlib.pyplot as plt

pd.Series(data=5)

lista_nome = 'Howar Ian Peter Jonah Kellie'.split()
pd.Series(lista_nome)
dados={
    'nome1': 'Howar',
    'nome2': 'Ian',
    'nome3': 'Peter',
    'nome4': 'Jonah',
    'nome5': 'Kellie',
    }
cpfs = '111.111.111-11 222.222.222-22 333.333.333-33 444.444.444-44 555.555.555-55'.split()

pd.Series(lista_nome, index=cpfs)
series_dados= pd.Series(lista_nome, index=cpfs)
series_dados.loc['333.333.333-33']
