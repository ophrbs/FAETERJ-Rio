/* QUESTÃO 03: Implementar um programa
que calcule o valor de base^expoente, onde
base e expoente são números inteiros
dados pelo usuário. */

#include <stdio.h>

void main()
{
  int base, expoente, i;
  long long int resultado = 1;

  printf("Insira o valor da base: ");
  scanf("%d", &base);
  printf("Insira o valor do expoente: ");
  scanf("%d", &expoente);

  for (i = 1; i <= expoente; i++)
  {
    resultado = (resultado * base);
  }

  printf("Resultado de %d^%d: %lld", base, expoente, resultado);
}