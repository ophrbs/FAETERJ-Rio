/* QUESTÃO 01:
Dado um número inteiro N, fazer um 
programa que exiba os números pares 
iguais ou inferiores a N. */

#include <stdio.h>

void main()
{
  int i, n, pares = 0;

  printf("Insira um numero inteiro: ");
  scanf("%d", &n);

  printf("Numeros pares iguais ou inferiores a %d:\n", n);
  for(i = 1; i <= n; i++)
  {
    if (i % 2 == 0)
    {
      printf("%d ", i);
    }
  }
}