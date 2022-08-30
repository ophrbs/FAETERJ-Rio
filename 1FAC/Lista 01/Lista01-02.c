/* QUESTÃO 02:
Elabore um algoritmo que, dada a idade de um 
nadador, classifique-o em uma das seguintes 
categorias:

Categoria | Faixa de idade
infantil A |0 - 4 anos
infantil B |5 - 7 anos
infantil C |8-10 anos
juvenil A  |11-13 anos
juvenil B  |14-17 anos
Adulto     |18 anos ou mais */

#include <stdio.h>

void main()
{
//variaveis
  int idade;

//scans
  printf("Digite a idade do nadador:\n");
  scanf("%d", &idade);
  
//calculos e resultados
  if (idade < 5)
  {
    printf("Categoria: Infatil A");
  }
 else
  {
    if (idade < 8)
    {
      printf("Categoria: Infatil B");
    }
    else
    {
      if (idade < 11)
      {
      printf("Categoria: Infantil C");
      }
      else
      {
        if (idade < 14)
        {
          printf("Categoria: Juvenil A");
        }
        else
        {
          if (idade < 18)
          {
            printf("Categoria: Juvenil B");
          }
          else
          {
            printf("Categoria: Adulto");
          }
        }
      }
    }
  }
}