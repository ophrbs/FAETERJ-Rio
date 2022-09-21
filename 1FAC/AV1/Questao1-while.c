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
	i = 1;
	while (i <= n)
	{
		j = 1;
		while (j <= i)
		{
			printf("%d ", j);
			j++;
		}	
	printf("\n");
	i++;
	}
}