/* Implementar uma função que, dado um vetor
de inteiros, determine se os seus elementos
formam uma Progressão Geométrica (PG). */

#include <stdio.h>

#define TAM 5

void criarVetor(int vetor[]);
int funcaoPG(int vetor[]);

void main()
{
  int vetor[TAM] = {0}, pg;

 //criar o vetor
  criarVetor(vetor);

  //verificar se é uma PG
  pg = funcaoPG(vetor);
  
  //printar resultado
  if (pg == 1)
  {
    printf("\nOs elementos formam uma PG");
  }
  else
  {
    printf("\nOs elementos nao formam uma PG");
  }
}


void criarVetor(int vetor[])
{
  int i;

  for (i = 0; i < TAM; i++)
  {
    printf("\nInsira um valor inteiro: ");
    scanf("%d", &vetor[i]);
  }
}

int funcaoPG(int vetor[])
{
  int i, testagem = 0;
  float razao;

  razao = (vetor[1] / vetor[0]);

  for(i = 0; i < (TAM-1); i++)
  {
    if ((vetor[i+1] / vetor[i]) != razao)
    {
      testagem = 1;
    }
  }

  if (testagem == 0)
  {
    return 1;
  }

  else
  {
    return 0;
  }
}