/*
  Questão 01:
	Pede-se o desenvolvimento de uma função recursiva que, dada 
	uma matriz M de L linhas e C colunas, onde L e C são 
	constantes, e três linhas L1, L2 e L3, altere os 
	elementos de L3, de forma que cada um consista na soma 
	dos elementos de L1 e L2, conforme ilustrado no 
	exemplo abaixo:
*/

//importação de bibliotecas
#include <stdio.h>

//definição de constantes
#define L 8
#define C 4

//protótipos das funções
void leitura(int matriz[L][C]);
void recursiva(int matriz[L][C], int L1, int L2, int L3, int posicao);
void exibirMatriz (int M[L][C]);

//main
int main ()
{
	int matriz[L][C] = {{1, 5, 9, 2},
	                    {0, 3, 4, 8}, //L1
	                    {1, 1, 3, 7},
	                    {7, 9, 6, 5}, //L2
	                    {1, 3, 2, 4},
	                    {8, 6, 8, 7},
	                    {9, 7, 2, 1}, //L3
	                    {4, 6, 7, 8}};

	//exibindo a matriz antes da chamada à função
	exibirMatriz (matriz);
	
	//chamandao a função
	leitura(matriz);
	
	//exibindo a matriz após a chamada à função
	exibirMatriz (matriz);
}
	
//implementação das funções

void leitura(int matriz[L][C])
{
	int L1, L2, L3;
	
	printf("Insira o valor da primeira linha: ");
	scanf("%d", &L1);
	printf("Insira o valor da segunda linha: ");
	scanf("%d", &L2);
	printf("Insira o valor da terceira linha: ");
	scanf("%d", &L3);
	
	recursiva(matriz, L1, L2, L3, 0);
}

void recursiva(int matriz[L][C], int L1, int L2, int L3, int posicao)
{
	if (posicao < C)	
	{
		matriz[L3][posicao] = matriz[L1][posicao] + matriz[L2][posicao];
		recursiva(matriz, L1, L2, L3, posicao+1);
	}
}

void exibirMatriz (int M[L][C])
{
	//declaração de variáveis
	int i, j;
	
	printf ("Elementos da matriz:\n\n");
	
	for (i=0;i<L;i++)
	{
		for (j=0;j<C;j++)
		{
			printf ("%3d ", M[i][j]);
		}
		
		printf ("\n");
	}
	
	printf ("\n\n");
}