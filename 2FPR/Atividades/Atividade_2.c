/* Desenvolver uma função que, dada uma string
s, determine se todos os seus caracteres são
distintos. */

#include <stdio.h>
#include <string.h>

int charDistintos(char s[]);

void main()
{
  int retorno;
  char s[30];
  
  printf("Insira a string: ");
  fflush(stdin);
  gets(s);

  retorno = charDistintos(s);

  if (retorno == 0) {
    printf("ha caracteres repetidos");
  } else
  if (retorno == 1) {
    printf("todos os caracteres sao distintos");
  }
  
}

int charDistintos(char s[])
{
  int i, j, tam;
  tam = strlen(s);

  for (i = 0; i < tam-1; i++)
  {
    for (j = i+1; j < tam; j++)
    {
      if (s[i] == s[j])
      {
        return 0;
      }      
    }    
  }
  return 1;
}