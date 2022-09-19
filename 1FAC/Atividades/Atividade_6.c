/* Implementar uma função que, dado um vetor
de inteiros, desloque os valores pares para o
seu início e os ímpares para o final. */

#include <stdio.h>

#define TAM 5

void criarVetor(int vetor[], int tamanho);
void parImpar(int vetor[], int pares[], int *tamP, int impares[], int *tamI);
void juntarVetores();
void novoVetor(int vetor[], int tamanho);
void exibirVetor (int v[], int tamanho);

void main()
{
  int vetor[TAM] = {0};

  //criar o vetor
  criarVetor(vetor, TAM);

  //exibir vetor criado
  printf("\nVetor antes:\n");
  exibirVetor (vetor, TAM);

  //modificando o vetor para se tornar o que a questão pede
  novoVetor(vetor, TAM);

  //exibir vetor modificado
  printf("\nVetor Depois:\n");
  exibirVetor (vetor, TAM);
}

void criarVetor(int vetor[], int tamanho)
{
  int i;

  for (i = 0; i < tamanho; i++)
  {
    printf("\nInsira um valor inteiro: ");
    scanf("%d", &vetor[i]);
  }
}

void novoVetor(int vetor[], int tamanho)
{
  int vetP[tamanho], vetI[tamanho], quantP, quantI; 
  
  //separando o vetor em 2 subvetores, com os pares e com os ímpares
  parImpar (vetor, vetP, &quantP, vetI, &quantI);

  //juntando os vetores de pares e ímpares em um único vetor
  juntarVetores (vetor, vetP, vetI, quantP, quantI);
}

void parImpar (int vetor[], int pares[], int *tamP, int impares[], int *tamI)
{
	int i, j = 0, k = 0, total;
	
	for (i = 0; i < TAM; i++)
	{
		if (vetor[i] % 2 == 0)
		{
			pares[j] = vetor[i];
			j++;
		}
		else
		{
			impares[k] = vetor[i];
			k++;
		}
	}
	
	*tamP = j;
	*tamI = k;
}

void juntarVetores(int vetor[], int vetP[], int vetI[], int quantP, int quantI)
  {
    int i, j, k;

    //passando os pares para o começo
    for (i = 0; i <= quantP; i++)
    {
      vetor[i] = vetP[i];
    }

    //passando os ímpares para o final
    for (k = quantP, j = 0; k <= TAM, j <= quantI; k++, j++)
    {
      vetor[k] = vetI[j];
    }
  }

void exibirVetor (int vetor[], int tamanho)
{
	int i;
	
	printf ("\nElementos do vetor: ");
	
	for (i = 0; i < tamanho; i++)
	{
		printf ("%d ", vetor[i]);
	}
	
	printf ("\n\n");
}