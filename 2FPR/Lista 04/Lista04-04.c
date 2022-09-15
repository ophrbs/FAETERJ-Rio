/* Questão 04: 
Implementar  uma  função  que  remova  todas  as 
ocorrências  de  determinado  caracter  em  uma 
string. */

#include <stdio.h>

void removerCaracter(char string[], int caracter);

void main()
{
  char string[30], caracter;

  printf("Insira a string: ");
  fflush(stdin);
  gets(string);

  printf("Insira o caracter a ser removido: ");
  fflush(stdin);
  scanf("%c", &caracter);

  printf("\nstring antes: %s", string);
  removerCaracter(string, caracter);
  printf("\nstring com o caracter %c removido: %s", caracter, string);
}

void removerCaracter(char string[], int caracter)
{
  int i, j;

  for (i = 0; string[i] != '\0'; i++)
  {
    if (string[i] == caracter)
    {
      for (j = i; string[j] != '\0'; j++)
      {
        string[j] = string[j+1];
      }
      i--;
    }    
  }  
}