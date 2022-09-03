#include <iostream>
#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

struct lista {
	int info;
	struct lista* prox;
};
typedef struct lista Lista;

struct alunos {
	char nome[25];
	struct alunos* prox;
};
typedef struct alunos C;


Lista* inicializar (void)
{
	return NULL;
}


Lista* inserir(Lista* l, int i){
	Lista* novo = (Lista*) malloc(sizeof(Lista));
	novo -> info = i;
	novo -> prox = l;
	return novo;
}

Lista* inserirPosicao(Lista* l, int pos, int v){
	int cont = 1;
	Lista *p = l;
	Lista* novo = (Lista*)malloc(sizeof(Lista));
	while (cont != pos){
		p = p -> prox;
		cont++;
	}
	novo -> info = v;
	novo -> prox = p -> prox;
	p -> prox = novo;
	return l;
}
	
Lista* inserirFim(Lista* l, int v){
	int cont=1;
	Lista* p = l;
	Lista* novo = (Lista*)malloc(sizeof(Lista));
	while (p -> prox != NULL){
		p = p ->prox;
		cont++;
	}
	novo -> info = v;
	novo -> prox = p -> prox;
	p -> prox = novo;
	return l;
}

Lista* remove (Lista* l, int v){
	Lista* anterior=NULL;
	Lista* p=l;
	while (p != NULL && p -> info != v){
		anterior = p;
		p = p -> prox;
	}
	if (p==NULL)
	return l;
	if (anterior == NULL){
		l = p -> prox;
	} else {
		anterior -> prox = p -> prox;
	}
	return l;
}

void imprimir (Lista* l){
	Lista* p;
	printf("Elementos:\n");
	for(p=l; p != NULL; p = p->prox){
		if (p->prox == NULL){
			printf(" %d ", p->info);
		}else{		
			printf(" %d ->", p->info);
		}
	}
	
}

Lista* buscar(Lista* l, int v){
	Lista* p;
	for (p = l; p != NULL;p = p->prox){
		if(p -> info == v)
			return p;
	}
	return NULL;
}

int main(int argc, char** argv) {
	Lista* listaFinal;
	listaFinal = inicializar();
	listaFinal = inserir(listaFinal, 2);
	listaFinal = inserir(listaFinal, 1);
	listaFinal = inserirFim(listaFinal, 3);
	listaFinal = inserirPosicao(listaFinal, 1, 4);
	listaFinal = remove(listaFinal, 2);
	imprimir(listaFinal);
	return 0;
}
