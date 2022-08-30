/* QUESTÃO 04:
Um banco concederá um crédito especial aos 
seus clientes, variável com o saldo médio no 
último ano. Faça um algoritmo que calcule o 
valor do crédito de acordo com a tabela abaixo.

Saldo Médio                | Percentual
Inferior a R$ 1000,00      | nenhum crédito
De R$ 1000,00 a R$ 1499,99 | 20% do saldo médio
De R$ 1500,00 a R$ 2499,99 | 30% do saldo médio
R$ 2500,00 ou mais         | 40% do saldo médio */

#include <stdio.h>

void main()
{
//variaveis
  float saldoMedio, credito, saldoFinal;

//scans
  printf("Qual o valor do saldo medio?\n");
  scanf("%f", &saldoMedio);

//calculos e resultados
  if (saldoMedio < 1000)
  {
    printf("Voce nao recebera nenhum credito");
  }
  else
  {
    if (saldoMedio < 1500)
    {
      credito = (0.2 * saldoMedio);
      saldoFinal = (1.2 * saldoMedio);
      printf("Seu credito eh de R$ %.2f e seu saldo final eh de R$ %.2f", credito, saldoFinal);
    }
    else
    {
      if (saldoMedio < 2500)
      {
        credito = (0.3 * saldoMedio);
        saldoFinal = (1.3 * saldoMedio);
        printf("Seu credito eh de R$ %.2f e seu saldo final eh de R$ %.2f", credito, saldoFinal);
      }
      else
      {
        if (saldoMedio >= 2500)
        {
          credito = (0.4 * saldoMedio);
          saldoFinal = (1.4 * saldoMedio);
          printf("Seu credito eh de R$ %.2f e seu saldo final eh de R$ %.2f", credito, saldoFinal);
        }
      }
    }
  }
}