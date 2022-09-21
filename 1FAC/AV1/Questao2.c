/* Questão 02 [3,0 pontos]:
Desenvolver um programa que, dado um número
inteiro, determine a média de seus algarismos.
Observações:
1. Apenas um número deve ser lido;
2. O valor fornecido pelo usuário deve ser positivo
e inferior a 10.000. Caso não seja, uma
mensagem de erro deverá ser exibida e um novo
valor solicitado (e esse processo se repetirá até
que um valor válido seja informado).
Exemplo:
Número lido: 1524

média = (1+5+2+4)/4 = 12/4 = 3.0 */

#include <stdio.h>

void main()
{
	//variaveis
	int n, dezena, centena, milhar;
	float media, unidade;
	//scan principal
		printf("Insira um numero inteiro: ");
		scanf("%d", &n);
	
	//caso numero invalido
	if ((n < 1) || (n > 9999))
	{
	do {
		printf("Numero invalido, insira um numero positivo inferior a 10000");
		printf("\nInsira um numero inteiro: ");
		scanf("%d", &n);
	}
	while ((n < 1) || (n > 9999));
	}
		
	//numero 1 unidade
	if (n < 10 )
	{
		unidade = n;
		media = unidade;
	} else
	
	//numero 2 unidades
	if ((n > 9) && (n < 100))
	{
		dezena = (n / 10);
		unidade = (n % 10);
		media = ((dezena + unidade) / 2);
	} else
	
	//numero 3 unidades
	if ((n > 99) && (n < 1000))
	{
		centena = (n / 100);
		dezena = ((n - (centena * 100)) / 10);
		unidade = (n % 10);
		media = ((centena + dezena + unidade) / 3);
	} else
	
	//numero 4 unidades
	if ((n > 999) && (n < 10000))
	{
		milhar = (n / 1000);
		centena = ((n - (milhar * 1000)) / 100);
		dezena = ((n - (milhar * 1000) - (centena *100))/ 10);
		unidade = (n % 10);
		media = ((milhar + centena + dezena + unidade) / 4);
	}
	
	//resultado
	printf("Media: %.2f", media);
}