/* Desenvolver uma função que, dado um vetor
de reais e duas posições posI e posF, inverta os
elementos do subvetor definido por essas
posições. */

#include <stdio.h>

#define TAM 10

void criarVetor(int vetor[], int tamanho);
void vetorPosicoes(int *posiI, int *posiF);
void inverterVetor(int posI, int posF, int vetor[], int tamanho);

void main()
{
  int vetor[TAM] = {0}, posI, posF;

  //criar o vetor
  criarVetor(vetor, TAM);

  //pedir as posições posI e posF
  vetorPosicoes(&posI, &posF);

  //inveter os elementos definidos
  inverterVetor(posI, posF, vetor, TAM);

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

void vetorPosicoes(int *posiI, int *posiF)
{
  int posI, posF;

  printf("\nInsira o valor de posI: ");
  scanf("%d", &posI);
  printf("\nInsira o valor de posF: ");
  scanf("%d", &posF);

  *posiI = posI;
  *posiF = posF;
}

void inverterVetor(int posI, int posF, int vetor[], int tamanho)
{
  int intervalo = (posF - posI), i, j, vetorTemp[intervalo], vetorFinal[tamanho];

  //criando um subvetor temporario com a ordem invertida
  for(i = 0, j = posF; i <= intervalo; i++, j--)
  {
    vetorTemp[i] = vetor[j];
  }

  //passando os elementos do vetor temporario para o vetor principal
  for(i = posI, j = 0; i <= posF; i++, j++)
  {
    vetor[i] = vetorTemp[j];
  }	
}