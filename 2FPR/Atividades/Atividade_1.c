/* Dada uma matriz MLINHAxCOLUNA, onde LINHA e
COLUNA são constantes, e uma linha L,
desenvolver uma função que retorne um vetor
de tamanho COLUNA contendo, em cada
posição, a quantidade de vezes que os
elementos da linha L encontram-se nas demais
linhas da matriz. */

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define LINHA 5
#define COLUNA 5

void preencherAleatorio(int matriz[LINHA][COLUNA]);
void exibirMatriz(int matriz[LINHA][COLUNA]);
void novoVetor(int matriz[LINHA][COLUNA], int L);

void main()
{
  int matriz[LINHA][COLUNA], L;

  preencherAleatorio(matriz);
  exibirMatriz(matriz);

  printf("Insira o valor de L a ser analisado:");
  scanf("%d", &L);

  novoVetor(matriz, L);
}

void preencherAleatorio(int matriz[LINHA][COLUNA])
{
  int i, j;
  srand (time(NULL));
  for (i = 0; i < LINHA; i++)
  {
    for (j = 0; j < COLUNA; j++)
    {
      matriz[i][j] = 1+rand()%9;
    }
  }
}

void exibirMatriz(int matriz[LINHA][COLUNA])
{
  int i, j;
  for (i = 0; i < LINHA; i++)
  {
    for (j = 0; j < COLUNA; j++)
    {
      printf("%d", matriz[i][j]);
    }
    printf("\n");
  }
  printf("\n\n");
}

void novoVetor(int matriz[LINHA][COLUNA], int L)
{
  int i, j, vetor[COLUNA], cont = 0, valorAtual, C;

  for (C = 0; C < COLUNA; C++)
  {
    //definindo o valor a ser comparado
    valorAtual = matriz[L][C];

    //percorrendo o vetor
    for (i = 0; i < LINHA; i++)
    {
      for (j = 0; j < COLUNA; j++)
      {
        //checando se os valores são iguais
        if (matriz[i][j] == valorAtual)
        {
          cont++;
          if (i == L)
          {
            cont--;
          }
        }
      }
    }
      vetor[C] = cont;
      cont = 0;
  }
  //return vetor[C];

  for (i = 0; i < COLUNA; i++)
  {
    printf("%d", vetor[i]);
  }
  
}