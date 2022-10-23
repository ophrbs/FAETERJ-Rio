/* Questão 02 [2,5 pontos]:
Implementar uma função que, dadas duas strings s1 e
s2, crie uma nova string – s3 – contendo todos os
caracteres de s1 que não estejam em s2.
Nota: em s3, não devem existir caracteres repetidos. */

#include <stdio.h>
#include <string.h>

void funcao(char s1[20], char s2[20]);

void main()
{
  char s1[20], s2[20];
  printf("Insira s1: ");
  fflush(stdin);
  gets(s1);
  
  printf("Insira s2: ");
  fflush(stdin);
  gets(s2);
  
  funcao(s1, s2);
}

void funcao(char s1[20], char s2[20])
{
  int i, j, k = 0, tams1, tams2, tams3, check = 0;
  char s3[20];
  tams1 = strlen(s1);
  printf("\ntams1: %d", tams1);
  tams2 = strlen(s2);
  printf("\ntams2: %d", tams2);

  for (i = 0; i < tams1; i++)
  {
    for (j = 0; j < tams2; j++)
    {
      if (s1[i] == s2[j])
      {
        check = 1;
      }
    }
    if (check == 0)
    {
      for (j = 0; j < tams3; j++)
      {
        if (s3[j] == s1[i])
        {
          check = 1;
        }
      }
      if (check == 0)
      {
        s3[k] = s1[i];
        k++;
        tams3++;
      }
    }
    check = 0;
  }
  printf("\ns3: %s", s3);
}