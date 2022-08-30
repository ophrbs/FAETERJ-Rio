/* QUESTÃO 06:
Fazer um algoritmo que determine a ordem de uma data (dia e mês) no ano.
Exemplos:
01/01 - 1o dia do ano
03/02 - 34o dia do ano */

#include <stdio.h>

void main()
{
//variaveis
  int mes, dia, resultado;

//scans
  printf("Qual a data de hoje? (dia, mes)\n");
  scanf("%d, %d", &dia, &mes);

//switch case
  switch (mes)
  {
    case 1:
    resultado = dia;
    break;
  
    case 2:
    resultado = (31 + dia);
    break;
  
    case 3:
    resultado = (59 + dia);
    break;
  
    case 4:
    resultado = (90 + dia);
    break;
    
    case 5:
    resultado = (120 + dia);
    break;
    
    case 6:
    resultado = (151 + dia);
    break;
    
    case 7:
    resultado = (181 + dia);
    break;
    
    case 8:
    resultado = (212 + dia);
    break;
    
    case 9:
    resultado = (243 + dia);
    break;
    
    case 10:
    resultado = (273 + dia);
    break;
    
    case 11:
    resultado = (304 + dia);
    break;
    
    case 12:
    resultado = (334 + dia);
    break;
  }

//resultado
  printf("%do dia do ano", resultado);
}