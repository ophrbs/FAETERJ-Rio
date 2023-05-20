<!-- <?php
if (isset($_POST['idTextoAlterar']) && isset($_POST['perguntaTextoAlterar']) && isset($_POST['respostaTextoAlterar'])) {
  $idTextoAlterar = urldecode($_POST["idTextoAlterar"]);
  $perguntaTextoAlterar = urldecode($_POST["perguntaTextoAlterar"]);
  $respostaTextoAlterar = urldecode($_POST["respostaTextoAlterar"]);

  // Adicionar alterado
  if (!file_exists("perguntaTexto.txt")) {
    $cabecalho = "idTexto;perguntaTexto;respostaTexto;\n";
    $arquivoTexto = fopen("perguntaTexto.txt", "w");
    fwrite($arquivoTexto, $cabecalho);
    fclose($arquivoTexto);
  }
  $arquivoTexto = fopen("perguntaTexto.txt", "a");
  $txt = $idTextoAlterar . ";" . $perguntaTextoAlterar . ";" . $respostaTextoAlterar . "\n";
  fwrite($arquivoTexto, $txt);
  fclose($arquivoTexto);

  // Excluir antigo
  $idTextoAntiga = urldecode($_POST['idTexto']);
  $perguntaTextoAntiga = urldecode($_POST['perguntaTexto']);
  $respostaTextoAntiga = urldecode($_POST["respostaTexto"]);

  $nomeArquivo = 'perguntaTexto.txt';
  $variavelProcurada = "$idTextoAntiga;$perguntaTextoAntiga;$respostaTextoAntiga";

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
<html lang="en">

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
  <h1>Alterar Pergunta e Resposta de Texto:</h1>
  <?php
  //checar se as variaveis chegaram
  if (isset($_POST['idTextoAlterar']) && isset($_POST['perguntaTextoAlterar']) && isset($_POST['respostaTextoAlterar'])) {
    echo "Pergunta alterada!";
  } else
    if (isset($_POST['idTexto']) && isset($_POST['perguntaTexto']) && isset($_POST['respostaTexto'])) {
      $idTexto = urldecode($_POST['idTexto']);
      $perguntaTexto = urldecode($_POST['perguntaTexto']);
      $respostaTexto = urldecode($_POST["respostaTexto"]);
      $idTextoAlterar = $idTexto;

      ?>
      <form action="alterarTexto.php" method="POST">
        <label for="pergunta">ID:</label>
        <input type="number" value="<?php echo $idTexto ?>" disabled>

        <label for="pergunta">Pergunta:</label>
        <input type="text" name="perguntaTextoAlterar" value="<?php echo $perguntaTexto ?>" required>

        <label for=" resposta">Resposta:</label>
        <input type="text" name="respostaTextoAlterar" value="<?php echo $respostaTexto ?>" required>

        <input type="text" name="idTextoAlterar" value="<?php echo $idTextoAlterar ?>" hidden>
        <input type="text" name="idTexto" value="<?php echo $idTexto ?>" hidden>
        <input type="text" name="perguntaTexto" value="<?php echo $perguntaTexto ?>" hidden>
        <input type="text" name="respostaTexto" value="<?php echo $respostaTexto ?>" hidden>
        <input type="submit" value="Enviar">
      </form>
      <?php
    } else {
      echo "Acesse a lista de perguntas para editar uma pergunta";
    }
  ?>
</body>

</html>