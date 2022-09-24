/* QUESTÃO 04: A prefeitura de uma cidade
fez uma pesquisa com 300 de seus
habitantes, coletando dados sobre o
salário e número de filhos. A prefeitura
deseja saber:
a) média do salário da população;
b) média do número de filhos;
c) maior salário;
d) percentual de pessoas com salário até
R$ 1.000,00. */

#include <stdio.h>

void main()
{
  int i, filhos, totalFilhos = 0, pessoasSalario = 0;
  float salario, mediaSalario, maiorSalario = 0, totalSalario = 0, mediaFilhos, percentual;

  for(i = 1; i <= 300; i++)
  {
    printf("\nDigite o salario: ");
    scanf("%f", &salario);
    printf("\nDigite a quantidade de filhos: ");
    scanf("%d", &filhos);

    if (salario > maiorSalario) {
      maiorSalario = salario;
    }

    totalSalario = (totalSalario + salario);
    totalFilhos = (totalFilhos + filhos);

    if (salario <= 1000) {
      pessoasSalario++;
    }
  }

  mediaFilhos  = (float) totalFilhos / 300;
  mediaSalario = (totalSalario / 300);
  percentual = (float) pessoasSalario / 300;

  printf("\na) media do salario da populacao: R$%.2f", mediaSalario);
  printf("\nb) media do numero de filhos: %.2f", mediaFilhos);
  printf("\nc) maior salario: R$%.2f", maiorSalario);
  printf("\nd) percentual de pessoas com salario ate R$ 1.000,00: %.2f%%", percentual*100);
}