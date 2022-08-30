/* QUESTÃO 07:
Escreva um algoritmo para calcular o salário 
semanal de uma pessoa, determinado pelas 
condições que seguem: se o número de horas 
trabalhado for inferior ou igual a 40, a pessoa 
recebe x reais por hora; caso contrário, a 
pessoa recebe um adicional de 50% para cada 
hora trabalhada acima das 40 iniciais. */

#include <stdio.h>

void main()
{
//variaveis
  int horasTrabalhadas, salarioHora, salarioSemanal;

//scans
  printf("Insira o numero de horas trabalhado\n");
  scanf("%d", &horasTrabalhadas);
  printf("Insira o salario por hora\n");
  scanf("%d", &salarioHora);

//calculo
if (horasTrabalhadas <= 40)
  {
    salarioSemanal = (salarioHora * horasTrabalhadas);
  }
  else 
  {
    salarioSemanal = (((horasTrabalhadas - 40) * (salarioHora * 1.5)) + (40 * salarioHora));
  }

//resultado
  printf("O salario semanal eh de: %d reais", salarioSemanal);
}