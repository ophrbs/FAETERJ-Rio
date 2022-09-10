/* QUESTÃO 05:
Criar um programa que exiba os N
primeiros termos da seguinte série:
1,2,4,8,16,32,... */

#include <stdio.h>

void main()
{
  int i, n, resultado = 1;

  printf("Quantos termos?: ");
  scanf("%d", &n);

  printf("%d ", resultado);
    for(i = 1; i < n; i++)
    {
      resultado = (resultado * 2);
      printf("%d ", resultado);
    }
}