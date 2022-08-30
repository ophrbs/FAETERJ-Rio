/* QUESTÃO 04:
Desenvolva um algoritmo que calcule o
consumo de combustível de um automóvel em
determinada viagem. Para isso, devem ser obtidos:
i) o percurso (em quilômetros) da viagem;
ii) o número de quilômetros que o carro
percorre com um litro de combustível (km/l);
iii) o preço do litro do combustível. 
Ao final, o algoritmo deve determinar:
• A quantidade de combustível, em litros, 
consumida durante a viagem;
• O custo total de combustível */

#include <stdio.h>

void main()
{
//variaveis
  float percurso, kml, preco, litrosTotal, custoTotal;

//scans
  printf("Insira o percurso (em quilometros) da viagem\n");
  scanf("%f", &percurso);

  printf("Insira o numero de qulimetros que o carro percorre com um litro de combustivel (km/L)\n");
  scanf("%f", &kml);

  printf("Insira o preco do litro do combustivel\n");
  scanf("%f", &preco);

//calculos
  litrosTotal = (percurso / kml );
  custoTotal =(litrosTotal * preco);

//resultado
  printf("Quantidade de combustivel, em litros, consumida durante a viagem: %.2f\n", litrosTotal);
  printf("Custo total de combustivel: %.2f\n", custoTotal);
}