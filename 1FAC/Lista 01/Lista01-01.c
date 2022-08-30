/* QUESTÃO 01:
O custo ao consumidor de um carro novo é a 
soma do custo de fábrica com a porcentagem 
do distribuidor e dos impostos (aplicados ao 
custo de fábrica). Desenvolver um algoritmo 
que calcule o custo ao consumidor de 
determinado carro. */

#include <stdio.h>

void main()
{
//variaveis
  float custoFabrica, distribuidor, imposto, resultado;

//scans
  printf("Insira o custo de fabrica do carro:\n");
  scanf("%f", &custoFabrica);
  printf("Insira a porcentagem do distribuidor:\n");
  scanf("%f", &distribuidor);
  printf("Insira a porcentagem de impostos:\n");
  scanf("%f", &imposto);

//calculo
  resultado = custoFabrica + ((distribuidor / 100) * custoFabrica) + ((imposto / 100) * custoFabrica);
  
//resultado
  printf("Custo ao consumidor:%.2f", resultado);
} 