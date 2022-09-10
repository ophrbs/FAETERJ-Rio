/* QUESTÃO 08:
Fazer um programa que auxilie o orgão 
regulador no cálculo do total de recursos 
arrecadados com a aplicação de multas de 
trânsito. 
O programa deve ler as seguintes 
informações para cada motorista: 
− O número da carteira de motorista;
− Número de multas;
− Valor de cada uma das multas. 
Deve ser exibido o valor da dívida de cada 
motorista e ao final da leitura o total de 
recursos arrecadados (somatório de todas 
as multas). O programa também deverá 
apresentar o número da carteira do 
motorista que obteve o maior número de 
multas. */

#include <stdio.h>

void main()
{
  int i = 1, carteira, quantMultas, maisMultas = 0, carteiraMultas;
  float valor, totalMultas = 0, somaMulta = 0;
  char sair;

  do
  {
    printf("\nInsira o numero da carteira do motorista: ");
    scanf("%d", &carteira);
    printf("\nQuantas multas esse motorista possui? ");
    scanf("%d", &quantMultas);

    if (quantMultas > maisMultas)
    {
      maisMultas = quantMultas;
      carteiraMultas = carteira;
    }

    if (quantMultas > 0)
    {
      do
      {
        printf("\nInsira o valor da %da multa: ", i);
        scanf("%f", &valor);
        somaMulta = (somaMulta + valor);
        i++;
      } while (i <= quantMultas);
    }
    
    printf("\nDivida do motorista da carteira %d: ", carteira);
    printf("R$%.2f", somaMulta);

    totalMultas = (totalMultas + somaMulta);
    
    //reset
    i = 1;
    somaMulta = 0;

    printf("\nDeseja continuar inserindo dividas? [S/N]: ");
    fflush(stdin);
    scanf("%c", &sair);
  } while ((sair == 'S') || (sair == 's'));
  
  printf("\nTotal de recursos arrecadados: R$%.2f", totalMultas);
  printf("\nCarteira do motorista com maior numero de multas: %d", carteiraMultas);
}