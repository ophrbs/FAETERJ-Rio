<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AV1 3DAW EXCLUIR</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.html">Início</a>
    </nav>
  </header>
  <main>
    <h1>Excluir</h1>
    <?php
    //checar se as variaveis chegaram
    if (isset($_POST['perguntaTexto']) && isset($_POST['respostaTexto'])) {
      $pergunta = urldecode($_POST['perguntaTexto']);
      $resposta = urldecode($_POST["respostaTexto"]);

      $nomeArquivo = 'perguntaTexto.txt';
      $variavelProcurada = "$pergunta;$resposta";
    } else if (isset($_POST['perguntaMultipla']) && isset($_POST['opcao1']) && isset($_POST['opcao2']) && isset($_POST['opcao3']) && isset($_POST['respostaMultipla'])) {
      $pergunta = urldecode($_POST['perguntaMultipla']);
      $opcao1 = urldecode($_POST["opcao1"]);
      $opcao2 = urldecode($_POST["opcao2"]);
      $opcao3 = urldecode($_POST["opcao3"]);
      $respostaMultipla = urldecode($_POST["respostaMultipla"]);

      $nomeArquivo = 'perguntaMultipla.txt';
      $variavelProcurada = "$pergunta;$opcao1;$opcao2;$opcao3;$respostaMultipla";
    }

    // Ler o conteúdo do arquivo para um array
    $linhas = file($nomeArquivo);

    // Abrir o arquivo em modo de escrita
    $arquivo = fopen($nomeArquivo, 'w');

    if ($arquivo) {
      foreach ($linhas as $linha) {
        // Verificar se a linha contém a variável procurada
        if (strpos($linha, $variavelProcurada) === false) {
          // Se não contém, escrever a linha novamente no arquivo
          fwrite($arquivo, $linha);
        }
      }
      fclose($arquivo);

      echo "Pergunta '{$pergunta}' e suas respostas removidas com sucesso!";
    } else {
      echo "Não foi possível abrir o arquivo.";
    }
    ?>
  </main>
</body>

</html>