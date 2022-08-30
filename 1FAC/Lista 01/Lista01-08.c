/* QUESTÃO 08:
Faça um algoritmo para calcular a conta final de 
um hóspede de um hotel, considerando que:

a) Devem ser obtidos o nome do hóspede, o 
tipo do apartamento utilizado (A, B, C ou D), 
o número de diárias utilizadas pelo hóspede 
e o valor do consumo interno do hóspede;

b) O valor da diária é determinado pela 
seguinte tabela:

Tipo de Apartamento | Valor da diária
A                   | R$ 350,00
B                   | R$ 275,00
C                   | R$ 200,00
D                   | R$ 150,00
c) O valor da taxa de serviço equivale a 10% da conta.

A conta a ser apresentada ao cliente deve 
conter: o nome do hóspede, o tipo do 
apartamento, o valor total das diárias, o 
valor do consumo interno, o subtotal, o 
valor da taxa de serviço e o total geral. */

#include <stdio.h>

void main()
{
//variaveis
  char nome[20], apto;
  int diarias;
  float consumo, valorDiarias, subtotal, taxa, totalGeral;

//scans
  printf("Insira o nome do hospede\n");
  gets(nome);
  printf("Insira o tipo de apartamento (A, B, C ou D)\n");
  scanf("%c", &apto);
  printf("Insira o numero de diarias utilizadas\n");
  scanf("%d", &diarias);
  printf("Insira o valor de consumo interno do hospede\n");
  scanf("%f", &consumo);

//switch case 
  switch (apto)
  {
    case 'A':
    valorDiarias = (350 * diarias);
    break;

    case 'B':
    valorDiarias = (275 * diarias);
    break;

    case 'C':
    valorDiarias = (200 * diarias);
    break;

    case 'D':
    valorDiarias = (150 * diarias);
    break; 
  }

//resultado
  subtotal = (valorDiarias + consumo);
  taxa = (subtotal * 0.1);
  totalGeral = (subtotal + taxa);

//exibir
  printf("Nome do cliente: %s\n", nome);
  printf("Tipo do apatartamento: %c\n", apto);
  printf("Valor total das diarias: %.2f\n", valorDiarias);
  printf("Valor do consumo interno: %.2f\n", consumo);
  printf("Subtotal: %.2f\n", subtotal);
  printf("Valor da taxa de servico: %.2f\n", taxa);
  printf("Total geral: %.2f\n", totalGeral);
}