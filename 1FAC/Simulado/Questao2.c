/* QUESTÃO 5:
Implementar um programa que leia N valores reais positivos (caso o valor nao seja positivo, outro será lido). Ao final exibir:
a. o maior valor positivo fornecido;
b. a média de todos os valores informados*/

#include <stdio.h>

void main()
{
  int i, quant, valormin, valormax, valor;
  float media, soma = 0;

  printf("Quantidade de valores a serem lidos: ");
  scanf("%d", &quant);

  for(i = 1; i <= quant; i++)
  {
    printf("Valor: ");
    scanf("%d", &valor);

    if ((valor < 0) || (valor == 0))
    {
      i = (i - 1);
      printf("Valor invalido, digite outro numero\n");
    }
    else
    {
      soma = (soma + valor);
      media = (soma / i);
      
      if (i == 1)
      {
        valormin = valor;
        valormax = valor;
      }
      else 
      {
        if (valor > valormax) {
          valormax = valor;
        }
        if (valor < valormin) {
          valormin = valor;
        }
      }
    }
  }
  printf("\nValor max: %d", valormax);
  printf("\nMedia: %.2f", media);
}