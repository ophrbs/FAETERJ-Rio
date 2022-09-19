/* Desenvolver uma função que, dado um vetor
de reais, determine o número de valores
distintos no vetor. */

#include <stdio.h>

#define TAM 1

void criarVetor(int vetor[], int tamanho);
int valoresDistintos(int vetor[], int tamanho);

void main()
{
  int vetor[TAM] = {0}, quantidade;

  criarVetor(vetor, TAM);

  //função que adquire a quantidade de valores distintos
  quantidade = valoresDistintos(vetor, TAM);
  printf("quant: %d", quantidade);
}

void criarVetor(int vetor[], int tamanho)
{
  int i;

  for (i = 0; i < tamanho; i++)
  {
    printf("\nInsira um valor inteiro: ");
    scanf("%d", &vetor[i]);
  }
}

int valoresDistintos(int vetor[], int tamanho)
{
  int i, j, quantRepetidos = 0, quantFinal = 0, testador;

  //percorrendo o vetor
  for(i = 0; i < tamanho; i++)
  {
    j = (i + 1); 

    //numero a ser testado
    testador = vetor[i];

    //checagem de repetições do numero a ser testado
    do
    {
      if (vetor[j] == testador)
      {
        quantRepetidos++;
        j = tamanho;
      }
      else
      {
      j++;
      }
    } while (j < tamanho);
  }
  quantFinal = tamanho - quantRepetidos;
  return quantFinal;
}