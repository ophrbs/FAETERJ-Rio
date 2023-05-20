<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>AV1 3DAW Leandro Herbas</title>
</head>

<body>
  <header>
    <nav class="nav">
      <a href="index.html">Início</a>
      <a href="criarTexto.php">Criar Pergunta de Texto</a>
      <a href="criarMultipla.php">Criar Pergunta de Multipla Escolha</a>
      <a href="listarTodas.php">Listar Perguntas</a>
      <a href="buscar.php">Buscar</a>
      <h4>Para Alterar ou Excluir uma pergunta, acesse a Lista de Perguntas!</h4>
    </nav>
  </header>
  <main>
    <h1 class="titulo1">Excluir</h1>
    <?php
    //checar se as variaveis chegaram
    if (isset($_POST['idTexto']) && isset($_POST['perguntaTexto']) && isset($_POST['respostaTexto'])) {
      $idTexto = $_POST['idTexto'];
      $pergunta = urldecode($_POST['perguntaTexto']);
      $resposta = urldecode($_POST["respostaTexto"]);

      $nomeArquivo = 'perguntaTexto.txt';
      $variavelProcurada = "$idTexto;$pergunta;$resposta";
    } else if (isset($_POST['idMultipla']) && isset($_POST['perguntaMultipla']) && isset($_POST['opcao1']) && isset($_POST['opcao2']) && isset($_POST['opcao3']) && isset($_POST['respostaMultipla'])) {
      $idMultipla = $_POST['idMultipla'];
      $pergunta = urldecode($_POST['perguntaMultipla']);
      $opcao1 = urldecode($_POST["opcao1"]);
      $opcao2 = urldecode($_POST["opcao2"]);
      $opcao3 = urldecode($_POST["opcao3"]);
      $respostaMultipla = urldecode($_POST["respostaMultipla"]);

      $nomeArquivo = 'perguntaMultipla.txt';
      $variavelProcurada = "$idMultipla;$pergunta;$opcao1;$opcao2;$opcao3;$respostaMultipla";
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