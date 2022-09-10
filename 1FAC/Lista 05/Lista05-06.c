/* QUESTÃO 06:
Criar um programa que exiba os N
primeiros termos da seguinte série:
1,2,8,64,1024,... */

#include <stdio.h>

void main()
{
  int n, multiplicador = 1, i;
  long long resultado = 1;

  printf("Insira o valor de N: ");
  scanf("%d", &n);

  if (n <= 0) {
    printf("Valor invalido, insira um valor positivo e diferente de 0");
  } else
  {
    printf("1");
    {
      for(i = 2; i <= n; i++)
        {
          multiplicador = (multiplicador * 2);
          resultado = (resultado * multiplicador);
          printf(" %lld", resultado);
        }
    }
  }
}