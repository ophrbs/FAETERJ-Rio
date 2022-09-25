/* Questão 01:
Implementar uma função que, dada uma string
s, determine a quantidade de caracteres 
distintos em s */

#include <stdio.h>
#include <string.h>

int charDistintos (char s[]);

void main ()
{
  char s[30];

  printf("Insira a string: ");
  fflush(stdin);
  gets(s);

  charDistintos(s);
}

int charDistintos (char s[])
{
  int i, j, iguais, distintos, tam;
  tam = strlen(s);

  for (i = 0; i < tam; i++)
  {
    for (j = i+1; j < tam; j++)
    {
      if (s[i] == s[j]) {
        iguais++;
        j = tam;
      }      
    }
  }
  distintos = (tam - iguais);
  return distintos;
}