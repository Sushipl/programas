import re
def main():
    nome='asad_ASD3@ASk_2a23_1ofRQWQk.py'
    texto = re.search("[a-z_A-Z0-9]*",nome).group()
    print(texto)

if __name__ == '__main__':
    main()