/* QUESTÃO 1 (for):
Implementar 3 programas (um para cada estrutura de repetiçao) que leia um valor inteiro N e exiba os valores de 1 a N, atendendo as regras:
1. Na primeira metade dos valores, apresentar apenas aqueles que não sejam divisores de N;
2. Na segunda metade, mostrar somente os numeros pares. */

#include <stdio.h>

void main()
{
  int i, n;
  printf("Insira o valor inteiro N: ");
  scanf("%d", &n);

  printf("Nao divisores de %d:\n", n);
  for(i = 1; i <= n; i++)
  {
    if (n % i != 0)
    {
      printf("%d ", i);
    }
  }
  printf("\n");

  printf("Numeros pares no intervalo de 1 a %d:\n", n);
  for (i = 1; i <= n; i++)
  {
    if (i % 2 == 0)
    printf("%d ", i);
  }
}