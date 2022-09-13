/* Questão 01: 
Suponha  que  não  existissem  as  funções  strlen, 
strcpy, strcat e strcmp. Pede-se, então, a 
implementação de funções que tenham o 
mesmo objetivo daquelas. */

#include <stdio.h>

int contar(char str[]);
void copiar(char str2[], char str1[]);
void concatenar(char str1[], char str2[]);
int comparar(char str1[], char str2[]);

void main()
{
  char str1[30], str2[30];
  int quant, escolha, returnComparar;

  printf("qual funcao voce deseja utilizar?");
  printf("\n1 - strlen\n2 - strcpy\n3 - strcat\n4 - strcmp\n");
  scanf("%d", &escolha);

  switch (escolha)
  {
  case 1:
    printf("Insira a string a ser contada:");
    fflush(stdin);
    gets(str1);

    quant = contar(str1);
    printf("\nstrlen:");
    printf("\nquantidade de caracteres em: '%s': %d\n", str1, quant);
    break;

  case 2:
    printf("Insira a string 1:");
    fflush(stdin);
    gets(str1);
    printf("Insira a string 2:");
    fflush(stdin);
    gets(str2);

    copiar(str2, str1);
    printf("\nstrcpy:");
    printf("\nstr1: %s\nstr2: %s\n", str1, str2);
    break;

  case 3:
    printf("Insira a string 1:");
    fflush(stdin);
    gets(str1);
    printf("Insira a string 2:");
    fflush(stdin);
    gets(str2);

    concatenar(str1, str2);
    printf("\nstrcat:");
    printf("\nstr1: %s\nstr2: %s\n", str1, str2);
    break;

  case 4:
    printf("Insira a string 1:");
    fflush(stdin);
    gets(str1);
    printf("Insira a string 2:");
    fflush(stdin);
    gets(str2);

    returnComparar = comparar(str1, str2);
    printf("\nstrcmp: %d\n", returnComparar);
    break;
  }
}

int contar(char str[])
{
  int i = 0;

  while (str[i] != '\0')
  {
    i++;
  }
  return i;
}

void copiar(char str2[], char str1[])
{
  int i, tam;

  tam = contar(str1);

  for (i = 0; i <= tam; i++)
  {
    str2[i] = str1[i];
  }  
}

void concatenar(char str1[], char str2[])
{
  int i, j, tam1, tam2, tamTotal;

  tam1 = contar(str1);
  tam2 = contar(str2);
  tamTotal = tam1 + tam2;

  for (i = tam1, j = 0; i <= tamTotal; i++, j++)
  {
    str1[i] = str2[j];
  }    
}

int comparar(char str1[], char str2[])
{
  int i, tam1, tam2;

  tam1 = contar(str1);
  tam2 = contar(str2);

  for (i = 0; i <= tam1; i++)
  {
    if (str1[i] < str2[i]) {
      return -1;
    } else
    if (str1[i] > str2[i]) {
      return 1;
    }    
  }
  return 0;
}