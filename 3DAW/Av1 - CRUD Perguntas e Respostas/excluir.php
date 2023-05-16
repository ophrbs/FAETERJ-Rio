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

      // Fazer algo com a variável enviada
      $nomeArquivo = 'perguntaTexto.txt';
      $variavelProcurada = "$pergunta;$resposta";

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

        echo "Pergunta '{$pergunta}' e Resposta '{$resposta}' removidas com sucesso!";
      } else {
        echo "Não foi possível abrir o arquivo.";
      }
    } else {
      echo "deu ruim";
    }
    ?>
  </main>
</body>

</html>