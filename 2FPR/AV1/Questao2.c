/* 
Questão 02:
Pede-se o desenvolvimento de uma função que, dada uma string representando um número binário (ou seja, contendo
apenas os caracteres 0 e 1), converta-o para a base decimal.
Notas:
- A função solicitada deverá chamar outra função que validará se a string representa um número binário. Se não
consistir em um número binário, o valor -1 deverá ser retornado; caso contrário, o número inteiro decimal
equivalente será retornado;
- Durante a leitura das questões da prova, será apresentado um exemplo que evidencie o processo de transformação
de um número binário em decimal.
*/

#include <stdio.h>
#include <string.h>

#define TAM 5

int converter(char binario[]);
int validar(char binario[]);

void main()
{
	char binario[TAM];
	int resultado;
	
	resultado = converter("10110");
	printf("\nResultado 1 (10110): %d", resultado);
	
	resultado = converter("2022");
	printf("\nResultado 2 (2022): %d", resultado);
}

int converter(char binario[])
{
	int i, tam, base2, decimal, validacao;
	
	validacao = validar(binario);
	
	if(validacao == -1)
	{
		return -1;
	}
	else
	{
		tam = strlen(binario);
	
		for(i = tam-1; i >= 0; i--)
		{
			if(i != tam-1)
			{
				base2 = base2 * 2;
			}
			else
			{
				base2 = 1;
			}
		
			if(binario[i] == '1')
			{
				decimal = decimal + base2;
			}
		}
		return decimal;
	}
}

int validar(char binario[])
{
	int i, tam;
	tam = strlen(binario);
	
	for(i = 0; i < tam; i++)
	{
		if(binario[i] != '1' && binario[i] != '0')
		{
			return -1;
		}
	}
	
	return 0;
}