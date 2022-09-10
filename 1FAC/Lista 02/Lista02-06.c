/* QUESTÃO 06:
Escrever um algoritmo que, 
dados um número inteiro i e três valores a, b e 
c, apresente os 3 números na ordem definida 
por i, como descrito abaixo:
a) i = 1: os três valores em ordem crescente;
b) i = 2: os três valores em ordem decrescente;
c) i = 3: o maior valor deve ser apresentado no
meio dos outros. */

#include <stdio.h>

void main()
{
//variaveis
  int i, a, b, c, menor, medio, maior, resultado;

//scans
  printf("Escolha a ordem:\n1: os tres valores em ordem crescente;\n2: os tres valores em ordem decrescente;\n3: o maior valor deve ser apresentado no meio dos outros.\n");
  scanf("%d",&i);

  printf("Insira tres valores (a, b, c):\n");
  scanf("%d, %d, %d", &a, &b, &c);

//calculos
  if (a <= b && b <= c) {
    menor = a; medio = b; maior = c;
  } else 
  
  if(a <= c && c <= b) {
    menor = a; medio = c; maior = b;
  } else
  
  if(b <= a && a <= c) {
    menor = b; medio = a; maior = c;
  } else 
  
  if(b <= c && c <= a) {
    menor = b; medio = c; maior = a;
  } else 
  
  if (c <= a && a <= b) {
    menor = c; medio = a; maior = b;
  } else
  
  if(c <= b && b <= a) {
    menor = c; medio = b; maior = a;
  }

//resultado
  if (i == 1) {
    printf("Valores em ordem crescente: %d, %d, %d", menor, medio, maior);
  } else
  
  if (i == 2) {
    printf("Valores em ordem decrescente: %d, %d, %d", maior, medio, menor);
  } else
  
  if (i == 3) {
    printf("Maior valor no meio: %d, %d, %d", menor, maior, medio);
  }

}