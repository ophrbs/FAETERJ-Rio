/* QUESTÃO 02: Pede-se o desenvolvimento
de um programa que leia n valores e
determine o maior e o menor elementos
do conjunto fornecido. */

#include <stdio.h>
#include <limits.h>

void main()
{
  int valor, maiorValor = INT_MIN, menorValor = INT_MAX;
  char exit;

  do
  {
    printf("Insira um valor inteiro: ");
    scanf("%d", &valor);
    if (valor > maiorValor) {
      maiorValor = valor;
    } else
    if (valor < menorValor) {
      menorValor = valor;
    }
    printf("Deseja continuar? [S/N]\n");
    fflush(stdin);
    scanf("%c", &exit);
  } while ((exit == 'S') || (exit == 's'));
  
  printf("Maior valor: %d\n", maiorValor);
  printf("Menor valor: %d", menorValor);
}