/* QUESTÃO 03:
Implementar um programa que leia um valor 
inteiro n1. Se este não estiver no intervalo de 
100 a 999, uma mensagem deve ser exibida ao 
usuário informando que o número é inválido e, 
em seguida, a execução do programa terminará.
Caso o valor esteja no intervalo definido, o 
programa deverá criar um novo valor n2 (e exibi-
lo ao final) contendo os mesmos algarismos de 
n1, porém em ordem crescente.

Exemplos:
n1 514
n2 145

n1 929
n2 299

n1 124
n2 124

Nota:
Como definido no enunciado, n1 consiste em um 
número inteiro positivo, com 3 algarismos. n2 
também será um único número! */

#include <stdio.h>

void main()
{
//variaveis
  int n1, n2, c, d, u, menor, medio, maior, numero;

//scans
  printf("Insira um valor inteiro de 3 algarismos:\n");
  scanf("%d", &n1);



//calculos
  if ((n1 > 99) && (n1 < 1000))
  {
    c = (n1 / 100);
    d = ((n1 - (c * 100)) / 10);
    u = (n1 - (c * 100) - (d * 10));

    if (c <= d && d <= u) {
    menor = c; medio = d; maior = u;
    } else

    if (c <= u && u <= d) {
    menor = c; medio = u; maior = d;
    } else

    if (d <= c && c <= u) {
    menor = d; medio = c; maior = u;
    } else

    if (d <= u && u <= c) {
    menor = d; medio = u; maior = c;
    } else

    if (u <= c && c <= d) {
    menor = u; medio = c; maior = d;
    } else

    if (u <= d && d <= c) {
    menor = u; medio = d; maior = c;
    }

    numero = ((menor * 100) + (medio * 10) + maior);

    if ((menor != 0) && (medio != 0)) {
    printf("%d", numero);
    } else

    if ((menor == 0) && (medio == 0)) {
    printf("00%d", numero);
    } else

    if ((menor == 0) || (medio == 0)) {
    printf("0%d", numero);
    }
  } else
  printf("Valor invalido");
}