/* QUESTÃO 11:
Implementar um programa no qual o
usuário informa um número e verifica-se se
ele pode ser representado como o produto
de três números consecutivos.
Exemplo: 24 = 2 x 3 x 4. */

#include <stdio.h>

void main()
{
  int n, i, true = 0;

  printf("Insira um numero: ");
  scanf("%d", &n);
  
  for(i = 1; i < n; i++)
  {
    if ((i * (i+1) * (i+2)) == n)
    {
      printf("%d = %d * %d * %d", n, i, i+1, i+2);
      true = 1;
    }
  }

  if (true != 1)
  {
    printf("O numero %d nao pode ser representado como produto de tres numeros consecutivos.", n);
  }
}