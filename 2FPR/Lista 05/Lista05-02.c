/* Questão 02:
Implementar uma função que, dadas duas
strings s1 e s2, crie uma nova string – s3 –
contendo todos os caracteres de s1 que não 
estejam em s2.
Nota: em s3, não devem existir caracteres 
repetidos */

#include <stdio.h>
#include <string.h>

#define TAM 30
#define TRUE 1
#define FALSE 0

void novaString(char s1[], char s2[]);

void main ()
{
  char s1[TAM], s2[TAM];

  printf("Insira a string1: ");
  fflush(stdin);
  gets(s1);

  printf("Insira a string2: ");
  fflush(stdin);
  gets(s2);

  novaString(s1, s2);
}

void novaString(char s1[], char s2[])
{
  int i, j, k, pos3 = 0, tam1, tam2, checarIgual = FALSE, numRepetido = FALSE;
  char s3[TAM];

  tam1 = strlen(s1);
  tam2 = strlen(s2);

  for (i = 0; i < tam1; i++) //percorrendo s1
  {
    for (j = 0; j < tam2; j++) //percorrendo s2
    {
      if (s1[i] == s2[j]) //chechando se o caracter de s1 está em s2
      { 
        checarIgual = 1; //caracter de s1 está em s2
      }
    }
    if (checarIgual == FALSE) //caracter de s1 não está em s2
    {
      for (k = 0; k < i; k++) //checando se é um caracter repetido
      {
        if (s1[i] == s1[k])
        { 
          numRepetido = TRUE; //caracter único de s1 já está em s3
        }  
      }
      if (numRepetido == FALSE) //caracter único de s1 não está em s3
      {
        s3[pos3] = s1[i];
        pos3++;
      }
      numRepetido = FALSE; //resetar o true para false
    }
    checarIgual = FALSE; //resetar o true para false
  }
  s3[pos3] = '\0'; //finalizar s3

  puts(s3);
}