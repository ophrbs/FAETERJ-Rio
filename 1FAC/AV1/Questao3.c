/* Questão 03 [4,0 pontos]:
Desenvolver um programa que permaneça lendo
valores inteiros até que os números 10, 20 e 30 tenham
sido informados, nesta ordem (com a possibilidade de
outros valores serem fornecidos entre um e outro).
Ao final, exibir:
- Total de valores fornecidos pelo usuário;
- Maior número fornecido entre a ocorrência do 10 e
do 20;
- Média de todos os elementos pares lidos antes da
ocorrência do 10. */

#include <stdio.h>

void main ()
{
	//variaveis
	int n, contagem = 0, maiorNumero = 0, pares = 0, teste;
	float mediaPares = 0, somaPares = 0;
	
	//ate ser 10
	do {
		printf("Insira um numero inteiro: ");
		scanf("%d", &n);	
		contagem++;
		if ((n % 2 == 0) && (n != 10)) {
				pares++;
				somaPares = (somaPares + n);
				mediaPares = (somaPares / pares);
			}
	}
	while(n != 10);
	
	//ate ser 20
	do {
		printf("Insira um numero inteiro: ");
		scanf("%d", &n);
		contagem++;
		if (n != 20) {
				if (n > maiorNumero) {
					maiorNumero = n;
				}
			}
	}
	while(n != 20);
	
	//ate ser 30
	do {
		printf("Insira um numero inteiro: ");
		scanf("%d", &n);
		contagem++;	
	}
	while(n != 30);
	
	//resultados
	printf("\nTotal de valores fornecidos pelo usuario: %d", contagem);
	if (maiorNumero != 0) {
		printf("\nMaior numero fornecido entre a ocorrencia do 10 e do 20: %d", maiorNumero);
	} else
	if (maiorNumero == 0) {
		printf("\nMaior numero fornecido entre a ocorrencia do 10 e do 20: Nao houve numeros fornecidos entre a ocorrencia do 10 e do 20");
		printf("\nMedia de todos os elementos pares lidos antes da ocorrencia do 10: %.2f", mediaPares);
	}
}