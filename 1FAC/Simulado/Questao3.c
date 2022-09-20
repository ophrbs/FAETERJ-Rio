/* QUESTÃO 6:
Desenvolver uma aplicação que permaneça lendo dados (código, número de créditos, notas da AV1, AV2 e AVF - esta última, quando for o caso) sobre as diversas disciplinas cursadas por determinado aluno. Ao final, exibir:
- Número de disciplinas cursadas;
- Total de disciplinas nas quais foi aprovado sem prova final (média igual ou superior a 6), reprovado sem direito de fazer a prova final (média inferior a 4) e provas finais prestadas;
- Código da disciplina na qual obteve maior média final;
- Código da disciplina na qual obteve menor média final;
- Coeficiente de rendimento do aluno (que consiste em uma média ponderada de todas as médias de disciplinas, considerando o número de créditos como peso) Obs:
I) A leitura deve ser mantida até que o usuário opte por terminá-la;
II) A nota na AVF só deve ser lida se a média entre a AV1 e AV2 ficar entre 4.0 e 5.9;
III) Deve ser considerado o critério de avanliação adotado na FAETERJ-Rio.*/

#include <stdio.h>

void main()
{
  int codigo, nCreditos, sair, disciplinas = 0, aprovadoSemAVF = 0, reprovadoSemAVF = 0, provasFinais = 0, codigoMaior, codigoMenor, i = 0;
  float av1, av2, avf, media, menorMedia, maiorMedia, coeficienteRendimento = 0;

  menorMedia = 11;
  maiorMedia = 0;

  do
  {
    i++;
    printf("Codigo: ");
    scanf("%d", &codigo);
    printf("Numero de creditos: ");
    scanf("%d", &nCreditos);
    printf("Nota AV1: ");
    scanf("%f", &av1);
    printf("Nota AV2: ");
    scanf("%f", &av2);
    disciplinas++;

    if (((av1 + av2) / 2) >= 6)
    {
      media = ((av1 + av2) / 2);
      aprovadoSemAVF++;
      printf("Media: %.2f, Aprovado", media);
    }
    else
    {
      if (((av1 + av2) / 2) < 4)
      {
        media = ((av1 + av2) / 2);
        reprovadoSemAVF++;
        printf("Media: %.2f, Reprovado", media);
      }
      else
      {
        if ((((av1 + av2) / 2) >= 4) && (((av1 + av2) / 2) < 6))
        {
          provasFinais++;
          printf("Nota AVF: ");
          scanf("%f", &avf);
          media = ((av1 + av2 + avf) / 3);
          if (media < 6)
          {
            printf("Media: %.2f, Reprovado", media);
          }
          else
          {
            if (media >= 6)
            {
              printf("Media: %.2f, Aprovado", media);
            }
          }
        }
      }
    }
    if (media > maiorMedia)
      {
        maiorMedia = media;
        codigoMaior = codigo;
      }
    else
    {
      if (media < menorMedia)
      {
        menorMedia = media;
        codigoMenor = codigo;
      }
    }

    coeficienteRendimento = ((coeficienteRendimento + (media * nCreditos)) / i);
    if (i == 1)
    {
      codigoMenor = codigo;
      codigoMaior = codigo;
    }
    printf("\nPara sair digite 0, Para continuar digite qualquer outro numero:");
    scanf("%d", &sair);
  }
  while(sair != 0);
  //resultados
  printf("\nNumero de disciplinas cursadas: %d", disciplinas);
  printf("\nTotal de disciplinas aprovado sem AVF: %d", aprovadoSemAVF);
  printf("\nTotal de disciplinas reprovado sem AVF: %d", reprovadoSemAVF);
  printf("\nProvas finais prestadas: %d", provasFinais);
  printf("\nCodigo da disciplina maior media final: %d", codigoMaior);
  printf("\nCodigo da disciplina menor media final: %d", codigoMenor);
  printf("\nCoeficiente de rendimento do aluno: %.2f", coeficienteRendimento);
}