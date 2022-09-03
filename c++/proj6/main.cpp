#include <iostream>
#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
#define N 100

struct fila{
	int n;
	int ini;
	char vet[N];
};
typedef struct fila Fila;

Fila* inicia_fila(void){
	Fila* f = (Fila*) malloc(sizeof(Fila));
	f -> n = 0;
	f -> ini = 0;
	return f;
}

void insere_fila (Fila* f, char elem){
	int fim;
	if(f->n==N){
		printf("A fila está cheia.\n");
		exit(1);
	}
	fim = (f->ini + f->n) % N;
	f->vet[fim] = elem;
	f->n++; 
}

float remove_fila (Fila* f){
	char elem;
	if (fila_vazia(f)){
		printf("A Fila esta vazia.\n");
		exit(1);
	}
	elem = f -> vet[f->ini];
	f->ini = (f->ini+1) % N;
	f->n--;
	return elem;	
}


int main(int argc, char** argv) {
	return 0;
}
