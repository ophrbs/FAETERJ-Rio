/* QUESTÃO 07:
Uma determinada empresa fez 
uma pesquisa de mercado para saber se as 
pessoas gostaram ou não de um novo 
produto que foi lançado. Para cada pessoa 
entrevistada foram coletados os seguintes 
dados: gênero (M ou F) e resposta (G 
[Gostou] ou N [Não Gostou]). Sabendo-se 
que foram entrevistadas X pessoas, faça um 
programa que forneça:
a) Número de pessoas que gostaram do produto;
b) Número de pessoas que não gostaram do produto;
c) Informação dizendo em que gêneroo produto
teve uma melhor aceitação. */

#include <stdio.h>

void main()
{
//variaveis
  int i, pessoas, mG = 0, mN = 0, fG = 0, fN = 0, pN, pG, m, f;
  char genero, resposta;

//scans
  printf("Numero de pessoas entrevistas: ");
  scanf("%d", &pessoas);

  for (i = 1; i <= pessoas; i++)
  {
    printf("Qual seu Genero? [M/F] ");
    fflush(stdin);
    scanf("%c", &genero);
    printf("Voce gostou? [G/N]");
    fflush(stdin);
    scanf("%c", &resposta);

    {
      if ((genero == 'M') && (resposta == 'G')) {
      mG++;
      } else

      if ((genero == 'M') && (resposta == 'N')) {
      mN++;
      } else

      if ((genero == 'F') && (resposta == 'G')) {
      fG++;
      } else

      if ((genero == 'F') && (resposta == 'N')) {
      fN++;
      }
    }
  }

//calculos e resultados
  pG = (mG + fG);
  pN = (mN + fN);
  m = (mG + mN);
  fG = (fG + fN);

  printf("Numero de pessoas que gostaram: %d\n", pG);
  printf("Numero de pessoas que nao gostaram: %d\n", pN);

  if ((mG/m) > (fG/f)) {
  printf("Homens gostaram mais");
  } else

  if ((fG/f) > (mG/m)) {
  printf("Mulheres gostaram mais");
  } else

  if ((fG/f) == (mG/m)) {
  printf("Gostaram igual");
  }
}