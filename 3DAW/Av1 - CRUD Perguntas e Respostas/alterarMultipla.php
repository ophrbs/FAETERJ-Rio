<!-- <?php
if (isset($_POST['idMultiplaAlterar']) && isset($_POST['perguntaMultiplaAlterar']) && isset($_POST['opcao1Alterar']) && isset($_POST['opcao2Alterar']) && isset($_POST['opcao3Alterar']) && isset($_POST['respostaMultiplaAlterar'])) {
  $idMultiplaAlterar = urldecode($_POST["idMultiplaAlterar"]);
  $perguntaMultiplaAlterar = urldecode($_POST["perguntaMultiplaAlterar"]);
  $opcao1Alterar = urldecode($_POST["opcao1Alterar"]);
  $opcao2Alterar = urldecode($_POST["opcao2Alterar"]);
  $opcao3Alterar = urldecode($_POST["opcao3Alterar"]);
  $respostaMultiplaAlterar = urldecode($_POST["respostaMultiplaAlterar"]);

  // Adicionar alterado
  if (!file_exists("perguntaMultipla.txt")) {
    $cabecalho = "idMultipla;perguntaMultipla;opcao1;opcao2;opcao3;respostaMultipla;\n";
    $arquivoMultipla = fopen("perguntaMultipla.txt", "w");
    fwrite($arquivoMultipla, $cabecalho);
    fclose($arquivoMultipla);
  }
  $arquivoMultipla = fopen("perguntaMultipla.txt", "a");
  $txt = $idMultiplaAlterar . ";" . $perguntaMultiplaAlterar . ";" . $opcao1Alterar . ";" . $opcao2Alterar . ";" . $opcao3Alterar . ";" . $respostaMultiplaAlterar . "\n";
  fwrite($arquivoMultipla, $txt);
  fclose($arquivoMultipla);

  // Excluir antigo
  $idMultiplaAntiga = urldecode($_POST['idMultipla']);
  $perguntaMultiplaAntiga = urldecode($_POST['perguntaMultipla']);
  $opcao1Antiga = urldecode($_POST['opcao1']);
  $opcao2Antiga = urldecode($_POST['opcao2']);
  $opcao3Antiga = urldecode($_POST['opcao3']);
  $respostaMultiplaAntiga = urldecode($_POST["respostaMultipla"]);

  $nomeArquivo = 'perguntaMultipla.txt';
  $variavelProcurada = "$idMultiplaAntiga;$perguntaMultiplaAntiga;$opcao1Antiga;$opcao2Antiga;$opcao3Antiga;$respostaMultiplaAntiga";

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
    <h1 class="titulo1">Alterar Pergunta e Resposta de Multipla Escolha:</h1>
    <?php
    //checar se as variaveis chegaram
    if (isset($_POST['perguntaMultiplaAlterar']) && isset($_POST['opcao1Alterar']) && isset($_POST['opcao2Alterar']) && isset($_POST['opcao3Alterar']) && isset($_POST['respostaMultiplaAlterar'])) {
      echo "Pergunta alterada!";
    } else
      if (isset($_POST['idMultipla']) && isset($_POST['perguntaMultipla']) && isset($_POST['opcao1']) && isset($_POST['opcao2']) && isset($_POST['opcao3']) && isset($_POST['respostaMultipla'])) {
        $idMultipla = $_POST['idMultipla'];
        $perguntaMultipla = urldecode($_POST['perguntaMultipla']);
        $opcao1 = urldecode($_POST['opcao1']);
        $opcao2 = urldecode($_POST['opcao2']);
        $opcao3 = urldecode($_POST['opcao3']);
        $respostaMultipla = urldecode($_POST["respostaMultipla"]);
        $idMultiplaAlterar = $idMultipla;

        ?>
        <form action="alterarMultipla.php" method="POST" class="formulario">
          <div class="id-div">
            <label for="idMultipla">ID:</label>
            <input type="number" value="<?php echo $idMultipla ?>" disabled>
          </div>

          <label for="pergunta">Pergunta:</label>
          <input type="text" name="perguntaMultiplaAlterar" size="50" value="<?php echo $perguntaMultipla ?>" required>

          <div class="div-opcoes">
            <label for="opcao1" class="label-opcao1">Opção 1:</label>
            <input type="text" class="input-opcao1" name="opcao1Alterar" value="<?php echo $opcao1 ?>" required>

            <label for="opcao2" class="label-opcao2">Opção 2:</label>
            <input type="text" class="input-opcao2" name="opcao2Alterar" value="<?php echo $opcao2 ?>" required>

            <label for="opcao3" class="label-opcao3">Opção 3:</label>
            <input type="text" class="input-opcao3" name="opcao3Alterar" value="<?php echo $opcao3 ?>" required>
          </div>

          <label for=" resposta">Resposta:</label>
          <input type="text" name="respostaMultiplaAlterar" size="50" value="<?php echo $respostaMultipla ?>" required>

          <input type="text" name="idMultiplaAlterar" value="<?php echo $idMultiplaAlterar ?>" style="display:none;">
          <input type="text" name="idMultipla" value="<?php echo $idMultipla ?>" style="display:none;">
          <input type="text" name="perguntaMultipla" value="<?php echo $perguntaMultipla ?>" style="display:none;">
          <input type="text" name="opcao1" value="<?php echo $opcao1 ?>" style="display:none;">
          <input type="text" name="opcao2" value="<?php echo $opcao2 ?>" style="display:none;">
          <input type="text" name="opcao3" value="<?php echo $opcao3 ?>" style="display:none;">
          <input type="text" name="respostaMultipla" value="<?php echo $respostaMultipla ?>" style="display:none;">
          <input type="submit" value="Enviar" class="botao">
        </form>
        <?php
      } else {
        echo "Acesse a lista de perguntas para editar uma pergunta";
      }
    ?>
  </main>
</body>

</html>