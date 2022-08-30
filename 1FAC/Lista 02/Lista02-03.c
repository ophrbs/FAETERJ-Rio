/* QUESTÃO 03:
As vendas parceladas se 
tornaram uma ótima opção para os lojistas que, 
a cada dia, criam novas promoções para tentar 
conquistar novos clientes. Faça um algoritmo
que permita ao lojista informar o preço do 
produto e receber as seguintes informações:
a) O valor com 10% de desconto para 
pagamento à vista;
b) O valor da prestação para parcelamento 
sem juros, em 5x;
c) O valor da prestação para parcelamento 
com juros, em 10x, com 20% de acréscimo 
no valor do produto. */

#include <stdio.h>

void main()
{
//variaveis
  float preco, valoraVista, cinco, dez;

//scans
  printf("Insira o preco do produto\n");
  scanf("%f", &preco);

//calculos
  valoraVista = (0.9 * preco);
  cinco = (preco / 5);
  dez = ((preco * 1.2) / 10);

//resultado
  printf("Valor com 10%% de desconto para pagamento a vista: R$%.2f\n", valoraVista);
  printf("Valor da prestacao para parcelamento sem juros, em 5x: R$%.2f\n", cinco);
  printf("Valor da prestacao para parcelamento com juros, em 10x, com 20%% de acrecscimo no valor do produto: R$%.2f\n", dez);
}