/* Questão 01 [3,0 pontos]:
Desenvolver três programas (um para cada estrutura
de repetição estudada) que, dado um número inteiro
N, apresente uma sequência de escritas que forme um
triângulo, conforme ilustrado nos exemplos abaixo:
Exemplo 1:
N = 4
1
1 2
1 2 3
1 2 3 4
Exemplo 2:
N = 7
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
1 2 3 4 5 6 7 */

#include <stdio.h>

void main()
{
	//variaveis
	int i, n, j;
	
	//scans
	printf("Insira um numero inteiro: ");
	scanf("%d", &n);
	
	//estrutura de repetição
	for(i = 1; i <= n; i++)
	{
		for (j = 1; j <= i; j++)
		{
			printf ("%d ", j);
		}
	printf("\n");
	}
}