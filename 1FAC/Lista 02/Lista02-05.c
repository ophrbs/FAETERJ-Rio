/* QUESTÃO 05: O cardápio de uma lanchonete é o seguinte:

Especificação   | Código | Preço
Cachorro quente | 100    | 3,50
Bauru simples   | 101    | 4,50
Bauru com ovo   | 102    | 5,20
Hamburger       | 103    | 3,00
Cheeseburger    | 104    | 4,00
Refrigerante    | 105    | 2,50

Escrever um algoritmo que obtenha o código 
do item pedido, a quantidade e calcule o valor 
a ser pago. 
Considere que, a cada execução do algoritmo, 
somente será calculado o valor relacionado a 
um item. */

#include <stdio.h>

void main()
{
//variaveis
  int codigo, quantidade;
  float valorTotal;

//scans
  printf("Especificacao   | Codigo | Preco\n");
  printf("Cachorro quente | 100    | 3,50\n");
  printf("Bauru simples   | 101    | 4,50\n");
  printf("Bauru com ovo   | 102    | 5,20\n");
  printf("Hamburger       | 103    | 3,00\n");
  printf("Cheeseburger    | 104    | 4,00\n");
  printf("Refrigerante    | 105    | 2,50\n");
  printf("\n");
  printf("Insira o codigo do item:\n");
  scanf("%d", &codigo);

  printf("Insira a quantidade:\n");
  scanf("%d", &quantidade);

//if else
  if (codigo == 100) {
    valorTotal = (quantidade * 3.50);
  } else
  
  if (codigo == 101) {
    valorTotal = (quantidade * 4.50);
  } else
  
  if (codigo == 102) {
    valorTotal = (quantidade * 5.20);
  } else
  
  if (codigo == 103) {
    valorTotal = (quantidade * 3);
  } else
  
  if (codigo == 104) {
    valorTotal = (quantidade * 4);
  } else
  
  if (codigo == 105) {
    valorTotal = (quantidade * 2.50);
  }

//resultado
  printf("Valor a ser pago: R$%.2f", valorTotal);
}