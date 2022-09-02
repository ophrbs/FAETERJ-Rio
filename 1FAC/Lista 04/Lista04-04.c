/* QUESTÃO 04:
Faça um programa que leia 
300 números reais. Ao final, devem ser 
exibidas as seguintes informações:
a) A quantidade de valores negativos digitados;
b) A média dos valores positivos. */

#include <stdio.h>

void main()
{
//variaveis
  int i, numero, positivos, negativos, mediaPositivos, somaPositivos;
  negativos = 0;
  positivos = 0;
  mediaPositivos = 0;
  somaPositivos = 0;

//contagem
  for(i = 1; i <= 10; i++)
  {
    printf("Digite um numero real: ");
    scanf("%d", &numero);
    if (numero < 0) {
    negativos++;
    } else 
    if (numero > 0) {
    positivos++;
    somaPositivos = (somaPositivos + numero);
    }
  }

//resultados
  printf("\nQuantidade de valores negativos: %d", negativos);
  mediaPositivos = (somaPositivos / positivos);
  printf("\nMedia dos numeros positivos: %d", mediaPositivos);
}