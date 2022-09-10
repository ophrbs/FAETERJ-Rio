/* QUESTÃO 04:
Implementar um programa que exiba os N
primeiros termos de uma PA (Progressão 
Aritmética) com primeiro termo a1 e razão 
r. 

an = a1 + (n - 1) . r */

#include <stdio.h>

void main()
{
  int i, n, a1, r, an;
  printf("Quantos termos?: ");
  scanf("%d", &n);
  printf("Primeiro termo: ");
  scanf("%d", &a1);
  printf("Razao: ");
  scanf("%d", &r);
  printf("\n");

  for(i = 1; i <= n; i++)
  {
    an = (a1 + (i - 1) * r);
    printf("%d ", an);
  }
}