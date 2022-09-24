/* QUESTÃO 05: Elabore um programa que
calcule a média ponderada de n elementos.
Observação: na média ponderada, cada
elemento possui um peso que representa a
sua contribuição no cálculo da média final. */

#include <stdio.h>

void main()
{
  int i = 1, peso, denominador = 0;
  float valor, media, numerador = 0;
  char saida;

  do
  {
    printf("\nDigite um valor: ");
    scanf("%f", &valor);
    printf("\nDigite seu peso: ");
    scanf("%d", &peso);
    
    numerador = (numerador + (valor * peso));
    denominador = (denominador + peso);

    i++;
    printf("\n\nDeseja adicionar mais numeros? [S/N]: ");
    fflush(stdin);
    scanf("%c", &saida);
  } while (saida == 'S' || saida == 's');

  media = (numerador / denominador);

  printf("Media ponderada: %.2f", media);  
}