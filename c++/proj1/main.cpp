#include <iostream>

int main(int argc, char** argv) {
	char nome[30];
	char endereco[9];
	int idade;
	
	printf("Nome \n");
	scanf("%s", &nome);
	printf("Endereço \n");
	scanf("%s", &endereco);
	printf("Idade \n");
	scanf("%d",&idade);
	printf("\n Nome: %s \n Endereço %s \n Idade: %d", nome, endereco, idade );
	return 0;
}
