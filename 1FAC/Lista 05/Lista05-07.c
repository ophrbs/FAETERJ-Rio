/* QUESTÃO 07:
Desenvolver um programa no qual o 
usuário entre com vários números inteiros 
e positivos e imprima o produto dos 
números ímpares e a soma dos números 
pares. */

#include <stdio.h>

void main()
{
  int i, n, soma = 0, produto = 1;
  char sair;
  
  do
  {
    printf("\nInsira um numero inteiro positivo: ");
    scanf("%d", &n);

    if (n <= 0) {
    printf("\nValor invalido. ");
    } else
      {
        if (n % 2 == 0) {
          soma = (soma + n);
        } else
          {
            produto = (produto * n);
          }
      }

    printf("Deseja continuar? [S/N]: ");
    fflush(stdin);
    scanf("%c", &sair);
  } while ((sair == 'S') || (sair == 's'));

  if ((soma != 0) || (produto != 1))
  {
    printf("\nProduto dos numeros impares: %d", produto);
    printf("\nSoma dos numeros pares: %d", soma);
  } else 
  if ((soma == 0) && (produto == 1))
  {
    printf("\nNenhum valor inserido");
  }
}