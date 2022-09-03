import pandas as pd

vendas = pd.read_excel('base_vendas.xlsx')
vendas.head(3)
vendas.info()
vendas.describe()