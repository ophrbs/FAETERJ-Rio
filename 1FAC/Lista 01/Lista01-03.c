/* QUESTÃO 03:
Construir um algoritmo que calcule o peso ideal
de uma pessoa, de acordo com o seu gênero e 
altura, utilizando as seguintes fórmulas:
▪ para homens: (72.7*h)-58
▪ para mulheres: (62.1*h)-44.7 */

#include <stdio.h>

void main ()
{
//variaveis
  int sexo;
  float altura, resultado;

//scans
  printf("Digite seu sexo: (1 para Homem e 2 para Mulher)\n");
  scanf("%d", &sexo);

//calculos e resultados
  if (sexo != 1 && sexo != 2)
    {
      printf("Resposta Invalida");
    }
  else
  {
    printf("Digite sua altura, em metros:\n");
    scanf("%f", &altura);
 
    if (sexo == 1)
    {
      resultado = (72.7 * altura) - 58;
      printf("Peso ideal: %.2f", resultado);
    }
    else
    {
      if (sexo == 2)
      {
        resultado = (62.1 * altura) - 44.7;
        printf("Peso ideal: %.2f", resultado);
      }
    }
  }
}