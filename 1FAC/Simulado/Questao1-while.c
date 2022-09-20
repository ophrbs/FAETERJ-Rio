/* QUESTÃO 1 (while):
Implementar 3 programas (um para cada estrutura de repetiçao) que leia um valor inteiro N e exiba os valores de 1 a N, atendendo as regras:
1. Na primeira metade dos valores, apresentar apenas aqueles que não sejam divisores de N;
2. Na segunda metade, mostrar somente os numeros pares. */

#include <stdio.h>

void main()
{
  int i, n;
  printf("Insira o valor inteiro N: ");
  scanf("%d", &n);

  i = 1;
  printf("Nao divisores de %d:\n", n);
  while(i <= n)
  {
    if (n % i != 0)
    {
      printf("%d ", i);
    }
    i++;
  }
  printf("\n");

  i = 1;
  printf("Numeros pares no intervalo de 1 a %d:\n", n);
  while(i <= n)
  {
    if (i % 2 == 0)
    {
      printf("%d ", i);
    }
    i++;
  }
}