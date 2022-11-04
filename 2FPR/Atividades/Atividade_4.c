/* Considere uma string s contendo apenas letras
e algarismos. Desenvolver uma função
recursiva que verifique se as letras de s estão
em seu início (e, consequentemente, os
algarismos ao seu final). Se estiverem, a função
retornará 1; caso contrário, 0. */

#include <stdio.h>
#include <string.h>

int verificar(char string[]);
int contagemLetras(char string[]);
int recursivo(char string[], int i);

void main()
{
  char string[20];
  int checagem;

  strcpy(string, "teste123");
  checagem = verificar(string);

  if (checagem == 1)
  {
    printf("\na string %s esta com letras no inicio", string);
  }
  else
  {
    printf("\na string %s nao estao com letras no inicio", string);
  }
}

int verificar(char string[])
{
  int check, cont;
  cont = contagemLetras(string);
  check = recursivo(string, 1);

  if (check == cont) {
    return 1;
  } else {
    return 0;
  }
}

int contagemLetras(char string[])
{
  int i, tam, cont = 0;
  tam = strlen(string);
  for (i = 0; i < tam; i++)
  {
    if (string[i] >= 65 && string[i] <= 90 || string[i] >= 97 && string[i] <= 122)
    {
      cont++;
    }
  }
  return cont;
}

int recursivo(char string[], int i)
{
  if (string[i] >= 65 && string[i] <= 90 || string[i] >= 97 && string[i] <= 122)
    {
      return 1 + recursivo(string, i+1);
    }
  else
  {
    return 1;
  }
}