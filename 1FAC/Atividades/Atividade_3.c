/* Fazer uma função que determine a quantidade
de algarismos de um número inteiro N.
(maior valor em int tem 10 algarismos) */

#include <stdio.h>

int contagem(int n);

void main()
{
  int n, quantidade;

  printf("Insira o valor de N: ");
  scanf("%d", &n);

  quantidade = contagem(n);

  printf("Quantidade de algarismos do numero %d: %d", n, quantidade);
}

int contagem(int n)
{
  int quant = 0;
  float contagem;

  if (n < 0) // para numeros negativos
  {
    contagem = -n;
  }
  else // para numeros positivos
  {
    contagem = n;
  }

  do
  {
    quant++;
    contagem = (contagem / 10);
  } while (contagem >= 1);

  return quant;
}