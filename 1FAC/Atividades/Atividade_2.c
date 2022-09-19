/* Desenvolver uma função que, dado um número
inteiro N, calcule o valor de S:
S = N - (N-1)/2! + (N-2)/3! - (N-3)/4! + (N-4)/5! - ... 1/N! */

#include <stdio.h>

//introdução das funções
float formula(int n);

//main
void main()
{
  //variaveis utilizadas na main
  int n;
  float S;

  //lendo o valor de N
  printf("Insira o valor de N: ");
  scanf("%d", &n);

  //puxando o valor da outra função e printando
  S = formula (n);
  printf("\nValor de S = %f", S);
}

//função da formula
float formula (int n)
{
  //variaveis utilizadas na função da formula
  int i, dividendo, divisor = 1;
  float S = 0.0;

  dividendo = n; //termo de cima da fração, incia como N e diminui no do_while
  i = 1;
    do
    {
      divisor = (divisor * i); // termo de baixo da fração, numero fatorial crescente

      if ((i % 2) != 0)  // quando é impar
        {
          S = (S + ((float)dividendo / divisor));
        }

      else // quando é par
        {
          S = (S - ((float)dividendo / divisor));
        }

      dividendo--;
      i++;

    } while (i <= n);

  return S;
}