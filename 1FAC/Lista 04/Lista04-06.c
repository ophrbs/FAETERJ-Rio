/* QUESTÃO 06:
Faça um programa que leia um 
número N inteiro, menor ou igual a 18. Se for 
maior do que 18, o programa exibirá uma 
mensagem de erro e terminará a sua 
execução; caso contrário, deverá exibir os 
números no intervalo de 1 a 99 cujos 
algarismos somem N.
N = 12 Portanto, o programa deve exibir os
números que estão no intervalo de 1 a 99,
cujos algarismos somam 12.
Ou seja: 39, 48, 57, 66, 75, 84 e 93.*/

#include <stdio.h>

void main()
{
//variaveis
  int N, i, a, b;

//scans
  printf("Insira o valor de N (menor ou igual a 18):\n");
  scanf("%d", &N);

  if ((N > 18) || (N <= 0)) {
  printf("Valor invalido");
  } else
  {
    printf("Valores cujo algarismos somam %d:\n", N);
    for(i = 1; i <= 99; i++)
    {
      a = (i / 10);
      b = (i % 10);
      if ((a + b) == N) {
        printf("%d ", i);
      }
    }
  }
}