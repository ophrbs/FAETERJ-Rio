/* QUESTÃO 01: Faça um programa que leia
um número inteiro x e, em seguida, solicite
ao usuário outros 50 valores inteiros. Ao
final, o programa deve exibir o total de
múltiplos de x fornecidos. */

#include <stdio.h>

void main()
{
  int n, valor, i, multiplos = 0;

  printf("Insira o valor de x: ");
  scanf("%d", &n);

  for(i = 1; i <= 10; i++)
  {
    printf("Insira um numero inteiro: ");
    scanf("%d", &valor);

    if ((valor % n) == 0) {
      multiplos++;
    }
  }

  printf("total de multiplos de %d fornecidos: %d", n, multiplos);
}