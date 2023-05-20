<!-- <?php
if (isset($_POST['perguntaMultiplaAlterar']) && isset($_POST['opcao1Alterar']) && isset($_POST['opcao2Alterar']) && isset($_POST['opcao3Alterar']) && isset($_POST['respostaMultiplaAlterar'])) {
  $perguntaMultiplaAlterar = urldecode($_POST["perguntaMultiplaAlterar"]);
  $opcao1Alterar = urldecode($_POST["opcao1Alterar"]);
  $opcao2Alterar = urldecode($_POST["opcao2Alterar"]);
  $opcao3Alterar = urldecode($_POST["opcao3Alterar"]);
  $respostaMultiplaAlterar = urldecode($_POST["respostaMultiplaAlterar"]);

  // Adicionar alterado
  if (!file_exists("perguntaMultipla.txt")) {
    $cabecalho = "perguntaMultipla;opcao1;opcao2;opcao3;respostaMultipla;\n";
    $arquivoMultipla = fopen("perguntaMultipla.txt", "w");
    fwrite($arquivoMultipla, $cabecalho);
    fclose($arquivoMultipla);
  }
  $arquivoMultipla = fopen("perguntaMultipla.txt", "a");
  $txt = $perguntaMultiplaAlterar . ";" . $opcao1Alterar . ";" . $opcao2Alterar . ";" . $opcao3Alterar . ";" . $respostaMultiplaAlterar . "\n";
  fwrite($arquivoMultipla, $txt);
  fclose($arquivoMultipla);

  // Excluir antigo
  $perguntaMultiplaAntiga = urldecode($_POST['perguntaMultipla']);
  $opcao1Antiga = urldecode($_POST['opcao1']);
  $opcao2Antiga = urldecode($_POST['opcao2']);
  $opcao3Antiga = urldecode($_POST['opcao3']);
  $respostaMultiplaAntiga = urldecode($_POST["respostaMultipla"]);

  $nomeArquivo = 'perguntaMultipla.txt';
  $variavelProcurada = "$perguntaMultiplaAntiga;$opcao1Antiga;$opcao2Antiga;$opcao3Antiga;$respostaMultiplaAntiga";

  $linhas = file($nomeArquivo);
  $arquivo = fopen($nomeArquivo, 'w');
  if ($arquivo) {
    foreach ($linhas as $linha) {
      if (strpos($linha, $variavelProcurada) === false) {
        fwrite($arquivo, $linha);
      }
    }
    fclose($arquivo);
  }
}
?> -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AV1 3DAW Leandro Herbas</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.html">Início</a>
    </nav>
  </header>
  <h1>Alterar Pergunta e Resposta de Multipla Escolha:</h1>
  <?php
  //checar se as variaveis chegaram
  if (isset($_POST['perguntaMultiplaAlterar']) && isset($_POST['opcao1Alterar']) && isset($_POST['opcao2Alterar']) && isset($_POST['opcao3Alterar']) && isset($_POST['respostaMultiplaAlterar'])) {
    echo "Pergunta alterada!";
  } else
    if (isset($_POST['perguntaMultipla']) && isset($_POST['opcao1']) && isset($_POST['opcao2']) && isset($_POST['opcao3']) && isset($_POST['respostaMultipla'])) {
      $perguntaMultipla = urldecode($_POST['perguntaMultipla']);
      $opcao1 = urldecode($_POST['opcao1']);
      $opcao2 = urldecode($_POST['opcao2']);
      $opcao3 = urldecode($_POST['opcao3']);
      $respostaMultipla = urldecode($_POST["respostaMultipla"]);

      ?>
      <form action="alterarMultipla.php" method="POST">
        <label for="pergunta">Pergunta:</label>
        <input type="text" name="perguntaMultiplaAlterar" value="<?php echo $perguntaMultipla ?>" required>

        <label for="opcao1">Opção1:</label>
        <input type="text" name="opcao1Alterar" value="<?php echo $opcao1 ?>" required>
        <label for="opcao2">Opção2:</label>
        <input type="text" name="opcao2Alterar" value="<?php echo $opcao2 ?>" required>
        <label for="opcao3">Opção3:</label>
        <input type="text" name="opcao3Alterar" value="<?php echo $opcao3 ?>" required>

        <label for=" resposta">Resposta:</label>
        <input type="text" name="respostaMultiplaAlterar" value="<?php echo $respostaMultipla ?>" required>

        <input type="text" name="perguntaMultipla" value="<?php echo $perguntaMultipla ?>" hidden>
        <input type="text" name="opcao1" value="<?php echo $opcao1 ?>" hidden>
        <input type="text" name="opcao2" value="<?php echo $opcao2 ?>" hidden>
        <input type="text" name="opcao3" value="<?php echo $opcao3 ?>" hidden>
        <input type="text" name="respostaMultipla" value="<?php echo $respostaMultipla ?>" hidden>
        <input type="submit" value="Enviar">
      </form>
      <?php
    } else {
      echo "Acesse a lista de perguntas para editar uma pergunta";
    }
  ?>
</body>

</html>