/* QUESTÃO 01:
Faça um programa que, dadas duas datas (cada 
qual com dia, mês e ano) fornecidas pelo 
usuário, determine qual delas é a mais recente. */

#include <stdio.h>

void main()
{
//variaveis
  int diaAtual, mesAtual, anoAtual, dia1, mes1, ano1, dia2, mes2, ano2;

//scans
  printf("Insira a data 1 (dia, mes, ano)\n");
  scanf("%d, %d, %d,", &dia1, &mes1, &ano1);

  printf("Insira a data 2 (dia, mes, ano)\n");
  scanf("%d, %d, %d,", &dia2, &mes2, &ano2);

//calculos e resultado
  if (ano1 > ano2) {
  printf("Data mais recente: %d/%d/%d", dia1, mes1, ano1);
  } else

  if (ano2 > ano1) {
  printf("Data mais recente: %d/%d/%d", dia2, mes2, ano2);
  } else
  
  if (ano1 = ano2) {
    if (mes1 > mes2) {
    printf("Data mais recente: %d/%d/%d", dia1, mes1, ano1);
    } else
    
    if (mes2 > mes1) {
    printf("Data mais recente: %d/%d/%d", dia2, mes2, ano2);
    } else

    if (mes1 = mes2) {
      if (dia1 > dia2) {
      printf("Data mais recente: %d/%d/%d", dia1, mes1, ano1);
      } else

      if (dia2 > dia1) {
      printf("Data mais recente: %d/%d/%d", dia2, mes2, ano2);
      } else

      if (dia1 = dia2) {
      printf("As datas sao iguais");
      }
    }
  }
}