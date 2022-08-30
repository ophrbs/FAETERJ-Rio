/* QUESTÃO 05:
Escrever um algoritmo que, dada uma quantia 
em reais, calcule o menor número possível de 
notas/moedas (100, 50, 20, 10, 5, 2 e 1) em que 
o valor pode ser decomposto */

#include <stdio.h>

void main()
{
//variaveis
  int valor, notas100, notas50, notas20, notas10, notas5, notas2, moedas1;

//scans
  printf("Insira o valor em reais\n");
  scanf("%d", &valor);

//calculos
  notas100 = (valor / 100);
  notas50 = ((valor % 100) / 50);
  notas20 = (((valor % 100) % 50) / 20);
  notas10 = ((((valor % 100) % 50) % 20) / 10);
  notas5 = (((((valor % 100) % 50) % 20) % 10) / 5);
  notas2 = ((((((valor % 100) % 50) % 20) % 10) % 5) / 2);
  moedas1 = ((((((valor % 100) % 50) % 20) % 10) % 5) % 2);

//resultados
  printf("Notas de 100: %d\n", notas100);
  printf("Notas de 50: %d\n", notas50);
  printf("Notas de 20: %d\n", notas20);
  printf("Notas de 10: %d\n", notas10);
  printf("Notas de 5: %d\n", notas5);
  printf("Notas de 2: %d\n", notas2);
  printf("Moedas de 1: %d\n", moedas1);
}