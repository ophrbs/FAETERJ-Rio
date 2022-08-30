/* QUESTÃO 02:
Escrever um algoritmo que 
obtenha o peso de uma pessoa na Terra e o 
número de um planeta. Ao final, com auxílio da 
tabela abaixo, calcular o peso desta pessoa no 
planeta escolhido.

Número |Planeta  | Gravidade Relativa g
1      |Mercúrio |0,37
2      |Vênus    |0,88
3      |Marte    |0,38
4      |Júpiter  |2,64
5      |Saturno  |1,15
6      |Urano   |1,17 

Para calcular o peso no planeta escolhido, 
utilize a seguinte fórmula:
pesoPlaneta = (pesoTerra/10) * gravidadePlaneta */

#include <stdio.h>

void main ()
{
//variaveis
  float pesoPlaneta, pesoTerra, gravidadePlaneta;
  int escolha;

//scans
  printf("Digite seu peso:\n");
  scanf("%f", &pesoTerra);

  printf("Escolha o planeta:\n 1 - Mercurio \n 2 - Venus \n 3 - Marte \n 4 - Jupiter \n 5 - Saturno \n 6 - Urano \n");
  scanf("%d", &escolha);

//calculos
//como a gravidade na terra é 10, devemos multiplicar a gravidade dos planetas por 10
  if (escolha == 1) {
    (gravidadePlaneta = 3.7);
  } else
  
  if (escolha == 2) {
    (gravidadePlaneta = 8.8);
  } else

  if (escolha == 3) {
    (gravidadePlaneta = 3.8);
  } else
  
  if (escolha == 4) {
    (gravidadePlaneta = 26.4);
  } else

  if (escolha == 5) {
    (gravidadePlaneta = 11.5);
  } else

  if (escolha == 6) {
    (gravidadePlaneta = 11.7);
  }
  
  pesoPlaneta = ((pesoTerra / 10) * gravidadePlaneta);

//resultado
  printf("Seu peso no planeta escolhido eh: %.2f kg", pesoPlaneta);
}