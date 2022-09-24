/* QUESTÃO 08: Faça um programa que leia
um número real x e um número inteiro y.
Em seguida, o programa deve ler 100
números reais e calcular quantos destes
estão no intervalo definido por [x-y,x+y]. */

#include <stdio.h>

void main()
{
  int x, y, i, inicio, final, quant = 0;
  float n;

  printf("Insira o valor x: ");
  scanf("%d", &x);
  printf("Insira o valor y: ");
  scanf("%d", &y);

  inicio = (x - y);
  final = (x + y);

  for(i = 1; i <= 10; i++)
  {
    printf("Insira um numero real: ");
    scanf("%f", &n);

    if ((n >= inicio) && (n <= final)) {
      quant++;
    }
  }
  
  printf("Quantidade de valores inseridos que estao no intervalo definido por [%d,%d]: %d", inicio, final, quant);
}