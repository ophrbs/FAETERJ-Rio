/* QUESTÃO 07: Faça um programa que leia
150 números reais e, ao final, exiba:
a) A soma dos 50 primeiros;
b) menor número do 51° ao 100°
valores fornecidos;
c) A média entre os últimos 50
valores. */

#include <stdio.h>
#include <float.h>

void main()
{
  int i;
  float n, soma = 0, menor = FLT_MAX, somaFinal = 0, mediaFinal;

  for(i = 1; i <= 150; i++)
  {
    printf("Insira um numero real: ");
    scanf("%f", &n);

    if (i <= 50) {
      soma = (soma + n);
    } else
    if ((i > 50) && (i <= 100)) {
        if (n < menor) {
          menor = n;
        }
      }
    else
    {
      somaFinal = (somaFinal + n);
    }
  }
  mediaFinal = somaFinal / 50;

  printf("\nSoma dos 50 primeiros: %.1f", soma);
  printf("\nMenor numero do 51 ao 100 valor fornecido: %f", menor);
  printf("\nMedia entre os 50 ultimos: %.1f", mediaFinal);
}