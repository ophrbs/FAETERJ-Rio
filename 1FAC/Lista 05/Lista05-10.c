/* QUESTÃO 10:
Foi feita uma pesquisa entre os habitantes 
de uma região e coletados os dados de 
altura e gênero das pessoas. Faça um 
programa que leia as informações de 50 
pessoas e informe:
− a maior e a menor alturas 
encontradas;
− a média de altura das mulheres;
− a média de altura da população;
− o percentual de homens na 
população. */

#include <stdio.h>

#define QUANT 50

void main()
{
  int i, totalHomem = 0, totalMulher = 0;
  float altura, menorAltura, maiorAltura, somaHomem = 0, somaMulher = 0, mediaHomem, mediaMulher, percentualHomem;
  char genero;

  for(i = 1; i <= QUANT; i++)
  {
    printf("\nH ou M?\n");
    fflush(stdin);
    scanf("%c", &genero);
    printf("\nDigite a altura, em metros:\n");
    scanf("%f", &altura);
    
    if (i == 1)
    {
      maiorAltura = altura;
      menorAltura = altura;
    } else
    {
      if (altura > maiorAltura) {
        maiorAltura = altura; }
      else
      if (altura < menorAltura) {
        menorAltura = altura; }
    }

    if ((genero == 'H') || (genero == 'h'))
    {
      totalHomem++;
      somaHomem = (somaHomem + altura);
    } else
    if ((genero == 'M') || (genero == 'm'))
    {
      totalMulher++;
      somaMulher = (somaMulher + altura);
    }
  }

  mediaMulher = (somaMulher / totalMulher);
  mediaHomem = (somaHomem / totalHomem);

  percentualHomem = (float) totalHomem / QUANT;

  printf("\nMaior altura encontrada: %.2fm", maiorAltura);
  printf("\nMenor altura encontrada: %.2fm", menorAltura);
  printf("\nMedia de altura das mulheres: %.2fm", mediaMulher);
  printf("\nMedia de altura dos homens: %.2fm", mediaHomem);
  printf("\nPercentual de homens na populacao: %.0f%%", percentualHomem*100);
}