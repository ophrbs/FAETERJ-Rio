/* QUESTÃO 08:
Em uma empresa deseja-se 
fazer um levantamento sobre algumas 
informações dos seus 250 funcionários. Cada 
funcionário deverá responder um 
questionário ao qual informará os seguintes 
dados: matrícula, gênero, idade, salário e 
tempo (em anos) de trabalho na empresa. A 
execução do programa deve exibir os 
seguintes itens:
a) Quantidade de funcionários que ingressaram
na empresa com menos de 21 anos;
b) Quantidade de funcionários do gênero feminino;
c) Média salarial dos homens;
d) Matrícula dos funcionários mais antigo
e mais novo. */

#include <stdio.h>

void main()
{
//variaveis
  int i, funcionarios, matricula, idade, jovens = 0, mulheres = 0, homens = 0, salarioTotal = 0, maiorTempo = 0, menorTempo = 999;
  char genero;
  float salario, tempo, mediaSalarial, matriculaVelho, matriculaNovo;
  
//codigo
  for(i = 1; i <= 3; i++)
  {
    printf("Matricula: ");
    scanf("%d", &matricula);
    printf("Genero (M para homem, F para mulher): ");
    fflush(stdin);
    scanf("%c", &genero);
    printf("Idade: ");
    scanf("%d", &idade);
    printf("Salario: ");
    scanf("%f", &salario);
    printf("Tempo de trabalho (em anos): ");
    scanf("%f", &tempo);

    if (idade < 21) {
    jovens++;
    }

    if (genero == 'F') {
    mulheres++;
    }

    if (genero == 'M') {
      homens++;
      salarioTotal = (salarioTotal + salario);
    }

    if (tempo < menorTempo) {
    matriculaNovo = matricula;
    menorTempo = tempo;
    }

    if (tempo > maiorTempo) {
    matriculaVelho = matricula;
    maiorTempo = tempo;
    }
  }

  mediaSalarial = (salarioTotal / homens);
  printf("\nQuantidade de funcionarios que ingressaram na empresa com menos de 21 anos: %d\n", jovens);
  printf("Quantidade de funcionarios do genero feminino: %d\n", mulheres);
  printf("Media salarial dos homens: %.2f\n", mediaSalarial);
  printf("Matricula dos funcionario mais antigo: %.0f\n", matriculaVelho);
  printf("Matricula do funcionario mais novo: %0.f\n", matriculaNovo);
}