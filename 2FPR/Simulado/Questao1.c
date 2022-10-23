/* Questão 01 [2,5 pontos]:
Desenvolver uma função que, dada uma matriz de
inteiros M10x10, troque de posição os elementos da
linha L com os valores da coluna C. Caso a troca seja
possível, a função deverá retornar a constante TRUE;
caso contrário, FALSE. */

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define LINHA 10
#define COLUNA 10
#define TRUE 1
#define FALSE 0
int funcao(int matriz[LINHA][COLUNA], int L, int C);
void preencherAleatorio(int matriz[LINHA][COLUNA]);
void exibirMatriz(int matriz[LINHA][COLUNA]);

void main()
{
  int matriz[LINHA][COLUNA], L, C;

  printf("Insira o valor de L: ");
  scanf("%d", &L);
  printf("Insira o valor de C: ");
  scanf("%d", &C);
  preencherAleatorio(matriz);
  funcao(matriz, L, C);
}

int funcao(int matriz[LINHA][COLUNA], int L, int C)
{
  int i, aux[COLUNA];

  for (i = 0; i < COLUNA; i++)
  {
    aux[i] = matriz[L][i];
  }
  exibirMatriz(matriz);
  for (i = 0; i < COLUNA; i++)
  {
    matriz[L][i] = matriz[i][C];
  }
  exibirMatriz(matriz);
  for (i = 0; i < LINHA; i++)
  {
   matriz[i][C] = aux[i];
  }
  exibirMatriz(matriz);
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