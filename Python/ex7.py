import sqlite3 as ql

conec = ql.connect('Python/SQLite_Python.db')
cursor = conec.cursor()
query= "SELECT * FROM fornecedor"
cursor.execute(query)
resultado=cursor.fetchall()
for linha in resultado:
    print(linha)