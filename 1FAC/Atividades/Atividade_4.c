/* Fazer uma função que permaneça lendo
números reais até que o usuário forneça o valor
-1. Ao final, retornar a quantidade de valores
lidos e o maior deles. */

#include <stdio.h>
#include <float.h>

void funcao(int *pontQuant, float *pontMaior);

void main()
{
  int quantidade;
  float maiorValor;

  funcao(&quantidade, &maiorValor);

  printf("\nQuantidade de valores lidos: %d", quantidade);
  printf("\nMaior valor lido: %f", maiorValor);
}

void funcao(int *pontQuant, float *pontMaior)
{
  int quant = 0;
  float n, maior = FLT_MIN;

  do
  {
    printf("\nInsira um numero real: ");
    scanf("%f", &n);
    quant++;

    if (n > maior)
    {
      maior = n;
    }
  } while (n != -1);

  *pontQuant = quant;
  *pontMaior = maior;
}