/* Considere um vetor que armazene alguns
dados coletados de um grupo de pessoas em
uma pesquisa, a saber: nome, gênero, idade e
altura.
Desenvolver uma função que receba os
parâmetros gênero, faixa de idade (idade inicial
e idade final) e faixa de altura (altura inferior e
altura superior) e retorne a quantidade de
pessoas que atendem aos filtros por ele
representados.
Nota: caso o gênero especificado seja igual a
M, serão considerados os homens que
estiverem nas faixas de idade e altura
especificadas; o mesmo ocorrerá com as
mulheres, quando o gênero for F. Porém, se o
gênero contiver qualquer valor diferente de M
ou F, todas as pessoas que atenderem aos
filtros de idade e altura serão contabilizadas. */

#include <stdio.h>

typedef struct {
  char nome[20];
  char genero;
  int idade;
  float altura; 
} TDados;

int funcao(TDados pessoa[], int tamanho, char genero, int idadeInicial, int idadeFinal, float alturaInicial, float alturaFinal);
void preencher(TDados pessoa[], int tamanho);

void main()
{
  TDados pessoa[5];
  int quantidade;

  preencher(pessoa, 5);
  quantidade = funcao(pessoa, 5, 'M', 1, 10, 1.1, 2.1);
  printf("quantidade: %d", quantidade);
}

int funcao(TDados pessoa[], int tamanho, char genero, int idadeInicial, int idadeFinal, float alturaInicial, float alturaFinal)
{
  int i, contM = 0, contF = 0, contTotal = 0;

  for (i = 0; i < tamanho; i++)
  {
   if ( (pessoa[i].idade >= idadeInicial) && (pessoa[i].idade <= idadeFinal) && (pessoa[i].altura >= alturaInicial) && (pessoa[i].altura <= alturaFinal) )
    {
      if (pessoa[i].genero == 'M')
      {
        contM++;
      } else
      if (pessoa[i].genero == 'F')
      {
        contF++;
      }
    }
  }
  contTotal = contM + contF;

  if (genero == 'M')
  {
    return contM;
  } else
  if (genero == 'F')
  {
    return contF;
  }
  else
  if (genero != "M" && genero != "F")
  {
    return contTotal;
  }
}

void preencher(TDados pessoa[], int tamanho)
{
  int i;
  for (i = 0; i < tamanho; i++)
  {
    printf("Insira o nome: ");
    fflush(stdin);
    gets(pessoa[i].nome);
    printf("Insira o genero (M ou F): ");
    fflush(stdin);
    scanf("&c", &pessoa[i].genero);
    printf("Insira a idade: ");
    fflush(stdin);
    scanf("&d", &pessoa[i].idade);
    printf("Insira a altura: ");
    fflush(stdin);
    scanf("&f", &pessoa[i].altura);
  }
}