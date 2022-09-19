/* Desenvolver uma função que, dado um número
inteiro N, exiba um triângulo como no exemplo
abaixo:

      1
    1 2 1
  1 2 3 2 1
1 2 3 4 3 2 1 */

#include <stdio.h>

//introduçao das funçoes
void Espacamento(int k);
void NumerosCrescente(int i);
void NumerosDecrescente(int i);
void Exibir(int n);

//main
void main()
{
  //variaveis da main
  int n;

  //recebendo o numero N
  printf("Insira o valor N: ");
  scanf("%d", &n);

  Exibir(n);
}

//Função para o espaçamento
void Espacamento(int k)
{
  for(k >= 1; k--;)
    {
      printf(" ");
    }
}

//Função para a ordem crescente
void NumerosCrescente(int i)
{
  int j;
  for(j = 1; j <= i; j++)
    { 
      printf("%d", j);
    }
}

//Função para a ordem decrescente
void NumerosDecrescente(int i)
{
  int j;
  for (j = (i-1); j >= 1; j--)
    {
      printf ("%d", j);
    }
}

void Exibir(int n)
{
  int i, k;
  k = (n - 1); //variavel utilizada para o espaçamento inicial


  //resolução do problema
  for (i = 1; i <= n; i++)
  {
    Espacamento(k);
    k--;

    NumerosCrescente(i);

    NumerosDecrescente(i);

    printf("\n");
  }
}