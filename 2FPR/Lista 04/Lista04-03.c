/* Questão 03: 
Desenvolver  uma  função  que,  dada  uma  string 
s, crie uma substring que inicie na posição p de 
s  e contenha n caracteres.  
Observações: se  p  e/ou  n  forem  inválidos,  a 
substring será vazia; ii) se s não possuir n 
caracteres  além  de  p,  a  substring  a  ser  criada 
começará em p e terminará no final de s. */

#include <stdio.h>

void criarSubstring(char string[], int p, int n);

void main ()
{
  char string[30];
  int p, n;

  printf("Insira a string: ");
  fflush(stdin);
  gets(string);

  printf("Insira o valor de p: ");
  scanf("%d", &p);
  printf("Insira o valor de n: ");
  scanf("%d", &n);

  criarSubstring(string, p, n);
}

void criarSubstring(char string[], int p, int n)
{
  int i, j;
  char substring[n];

  p--;

  if ((p >= 0) && (n > 0))
  {
      for (i = p, j = 0; j <= n; i++, j++)
    {
      if (j == n)
      {
        substring[j] = '\0';
      } else
      {
        substring[j] = string[i];
      }
    }
  } else
  {
    substring[0] = '\0';
  }

  printf("\nsubstring: %s", substring);
}