/* QUESTÃO 02:
Construir um programa que permita ao usuário 
calcular a área de uma figura geométrica. Para 
isto, o usuário deverá escolher a figura desejada 
([C]írculo, [R]etângulo, [Q]uadrado ou 
[T]riângulo) e fornecer as informações 
necessárias para que a área desta figura possa 
ser calculada.

Notas:
1. Fórmulas para o cálculo das áreas:
a. Acírculo = π.raio2, onde π = 3.14159;
b. Aretângulo = base.altura;
c. Aquadrado = lado2;
d. Atriângulo = (base.altura)/2.

2. Caso o usuário escolha uma opção inválida, 
uma mensagem de erro deve ser exibida e a 
execução do programa terminada. */

#include <stdio.h>

void main()
{
//variaveis
  char figura;
  float area, raio, base, altura, lado;
  const float pi = 3.14159; 

//scans
  printf("Escolha a figura desejada: ([C]irculo, [R]etangulo, [Q]uadrado ou [T]riangulo)\n");
  scanf("%c", &figura);

//calculos
  if (figura == 'C' || figura == 'c') {
    printf("Insira o raio:\n");
    scanf("%f", &raio);
    area = (pi * (raio * raio));
    printf("Area do circulo: %.2f", area);
  } else

  if (figura =='R' || figura == 'r') {
    printf("Insira a area da base:\n");
    scanf("%f", &base);
    printf("Insira a altura:\n");
    scanf("%f", &altura);
    area = (base * altura);
    printf("Area do retangulo: %.2f", area);
  } else

  if (figura == 'Q' || figura == 'q') {
    printf("Insira o valor do lado:\n");
    scanf("%f", &lado);
    area = (lado * lado);
    printf("Area do quadrado: %.2f", area);
  } else

  if (figura == 'T' || figura == 't') {
    printf("Insira o valor da base:\n");
    scanf("%f", &base);
    printf("Insira a altura:\n");
    scanf("%f", &altura);
    area = ((base * altura) / 2);
    printf("Area do triangulo: %.2f", area);
  } else
  printf("Erro, figura nao reconhecida.");
}