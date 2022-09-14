/* Questão 02: 
Dada uma string s,  desenvolver  uma função 
que determine se s é ou não um palíndromo.  
Observação:  uma  string  s  será  um  palíndromo 
quando seus caracteres formarem a mesma 
sequência,  independente  se  s  é  percorrida  da 
esquerda para direita ou vice-versa. */

#include <stdio.h>
#include <string.h>

int palindromo(char string[]);

void main()
{
  char string[30];
  int resultado;

  printf("Escreva a string:");
  fflush(stdin);
  gets(string);

  palindromo(string);
}

int palindromo(char string[])
{
  int i, j, tam;

  tam = strlen(string);

  for (i = 0, j = tam-1; i < tam; i++, j--)
  {
    if (string[i] != string[j])
    {
      printf("%s nao eh um palindromo", string);
      return 1;
    }
  }
  printf("%s eh um palindromo", string);
  return 0;
}