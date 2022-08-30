/* QUESTÃO 01:
O IMC (Índice de Massa Corporal) 
é um critério da Organização Mundial de Saúde 
para dar uma indicação sobre a condição de 
peso de uma pessoa adulta. A fórmula é:
IMC = peso / altura²
Elabore um algoritmo que, dados o peso e a 
altura de um adulto, determine a sua condição 
de acordo com a tabela abaixo:

IMC em adultos    | Condição
IMC < 18,5        | Abaixo do peso
18,5 ≤ IMC < 25,0 | Peso ideal
25,0 ≤ IMC < 30,0 | Sobrepeso
30,0 ≤ IMC < 35,0 | Obesidade grau I
35,0 ≤ IMC < 40,0 | Obesidade grau II
IMC ≥ 40,0        | Obesidade grau III */

#include <stdio.h>

void main()
{
//variaveis
  float peso, altura, imc;

//scans
  printf("Informe seu peso\n");
  scanf("%f", &peso);
  printf("Informe sua altura (em metros)\n");
  scanf("%f", &altura);

//calculos e resultados
  imc = (peso / (altura * altura));
  printf("Seu IMC eh de: %2.f\n", imc);

  if (imc < 18.5) {
    printf("Voce esta abaixo do peso");
  } else
  if (imc < 25) {
    printf("Voce esta no peso ideal");
  } else
  if (imc < 30 ) {
     printf("Voce esta em sobrepeso");
  } else
  if (imc < 35) {
    printf("Voce esta em obesidade grau I");
  } else
  if (imc < 40) {
     printf("Voce esta em obesidade grau II");
  } else
  printf("Voce esta em obeisdade grau III");
}