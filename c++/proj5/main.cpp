#include <iostream>
#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
struct Pilha {
	int topo;
	int capacidade;
	float* proxElem;
};

struct Pilha minhaPilha;
void cria_pilha (struct Pilha *p, int c){
	p -> proxElem = (float*) malloc (c * sizeof(float));
	p -> topo = -1;
	p -> capacidade = c;
}

void push_pilha(struct Pilha *p, float v){
	p -> topo++;
	p -> proxElem [p -> topo] = v;
}

float pop_pilha (struct Pilha*p){
	float aux = p -> proxElem [p->topo];
	p -> topo--;
	return aux;
}

int main(int argc, char** argv) {
	return 0;
}
