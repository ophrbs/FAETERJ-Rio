/* QUESTÃO 06: Faça um programa que leia
200 números inteiros. Ao final, exibir:
a) O maior número fornecido, de
ordem par (isto é, o maior dentre o
segundo, quarto, sexto, oitavo, etc
valores fornecidos).
b) A média dos valores pares. */

#include <stdio.h>
#include <limits.h>

void main()
{
  int i, n, maiorNumero = INT_MIN, quantPares = 0, somaPares = 0;
  float mediaPares;

  for(i = 1; i <= 200; i++)
  {
    printf("\nInsira um numero inteiro: ");
    scanf("%d", &n);

    if ((i % 2 == 0) && (n > maiorNumero)) {
      maiorNumero = n;
    }

    if (n % 2 == 0) {
      quantPares++;
      somaPares = (somaPares + n);
    }
  }

  mediaPares = (float) somaPares / quantPares;

  printf("\nMaior numero fornecido de ordem par: %d", maiorNumero);
  printf("\nMedia dos valores pares: %.2f", mediaPares);
}