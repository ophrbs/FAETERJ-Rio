/* QUESTÃO 09:
Escrever um programa que encontre o 
quinto número maior que 1000, cuja 
divisão por 11 tenha resto 5. */

#include <stdio.h>

void main()
{
  int i, quant = 0;

  i = 1000;
  do
  {
    i++;
    if (i % 11 == 5)
    {
      quant++;
      // printf("\n%do numero = %d", quant, i);
    }
  } while (quant != 5);

  printf("\nQuinto numero maior que 1000 cuja divisao por 11 tenha resto 5: %d", i); 
}