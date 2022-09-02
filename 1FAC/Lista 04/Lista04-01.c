/* QUESTÃO 01:
Faça um programa que leia um 
número inteiro positivo N e exiba todos os 
múltiplos de Y inferiores a N, onde N e Y são 
fornecidos pelo usuário. */

#include <stdio.h>

void main()
{
 //variaveis
  int n, y, i;

//scans
  printf("Digite um numero inteiro positivo (N):\n");
  scanf("%d", &n);
  printf("Digite um numero inteiro a ser o dividor (Y):\n");
  scanf("%d", &y);

 //calculos e resultados
  printf("\nMultiplos de %d inferiores a %d:\n", y, n);
  for (i = 1; i < n; i++)
  {
    if ((i%y == 0) && (i < (n - y))) {
    printf("%d ", i);
    } else
    if (i%y == 0) {
    printf("%d", i);
    }
  }
}