/* QUESTÃO 03:
Joãozinho investiu Q reais em 
uma aplicação com rendimento fixo de R% ao 
mês. Pede-se a implementação de um 
programa que calcule o valor (e exiba-o) 
disponível na conta de Joãozinho após A anos 
de investimento. */

#include <stdio.h>

void main()
{
//variaveis
  int a, m, i;
  float porcentagem, rendimento, q, r, valor;

//scans
  printf("Insira o investimento de Joaozinho:\n");
  scanf("%f", &q);

  printf("Insira o rendimento por mes:\n");
  scanf("%f", &r);

  printf("Insira a quantidade de anos:\n");
  scanf("%d", &a);

  m = (a * 12);
  porcentagem = ( 1 + (r / 100));

//conta
  for (i = 1; i <= m; i++)
  {
    q = (q * porcentagem);
  }
  
//resultado
  printf("Valor dipsonivel apos %d anos:\nR$%.2f", a, q);
}