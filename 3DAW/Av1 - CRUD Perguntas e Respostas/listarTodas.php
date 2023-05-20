<?php
$fileMultipla = "perguntaMultipla.txt";
if (file_exists($fileMultipla)) {
  $perguntaMultpla = "";
  $opcao1 = "";
  $opcao2 = "";
  $opcao3 = "";
  $respostaMultipla = "";
  $arquivoMultiplaIn = fopen("perguntaMultipla.txt", "r");
  $linhas = fgets($arquivoMultiplaIn);
}
$fileTexto = "perguntaTexto.txt";
if (file_exists($fileTexto)) {
  $perguntaTexto = "";
  $respostaTexto = "";
  $arquivoTextoIn = fopen("perguntaTexto.txt", "r");
  $linhas = fgets($arquivoTextoIn);
}
?>

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
    <div>
      <h1 class="titulo1">Listar:</h1>

      <?php
      if (!file_exists($fileMultipla)) {
        echo "<h3>Arquivo de Multipla não existe</h3>";
      } else {
        ?>

        <table>
          <tr>
            <th>ID</th>
            <th>Pergunta</th>
            <th>Opção 1</th>
            <th>Opção 2</th>
            <th>Opção 3</th>
            <th>Resposta</th>
          </tr>

          <?php
          while (!feof($arquivoMultiplaIn)) {
            $linhas = fgets($arquivoMultiplaIn);
            $colunaDados = explode(";", $linhas);

            if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2]) && isset($colunaDados[3]) && isset($colunaDados[4]) && isset($colunaDados[5])) {
              $idMultipla = $colunaDados[0];
              $perguntaMultipla = $colunaDados[1];
              $opcao1 = $colunaDados[2];
              $opcao2 = $colunaDados[3];
              $opcao3 = $colunaDados[4];
              $respostaMultipla = $colunaDados[5];
              ?>
              <tr style='text-align:center;'>
                <td>
                  <?php echo "$idMultipla"; ?>
                </td>
                <td>
                  <?php echo "$perguntaMultipla"; ?>
                </td>
                <td>
                  <?php echo "$opcao1"; ?>
                </td>
                <td>
                  <?php echo "$opcao2"; ?>
                </td>
                <td>
                  <?php echo "$opcao3"; ?>
                </td>
                <td>
                  <?php echo "$respostaMultipla"; ?>
                </td>
                <?php
                $perguntaMultipla = urlencode($perguntaMultipla);
                $opcao1 = urlencode($opcao1);
                $opcao2 = urlencode($opcao2);
                $opcao3 = urlencode($opcao3);
                $respostaMultipla = urlencode($respostaMultipla);
                ?>
                <td class="td-botoes">
                  <form action='alterarMultipla.php' method='POST'>
                    <input type='hidden' name='idMultipla' value=<?php echo "$idMultipla"; ?>>
                    <input type='hidden' name='perguntaMultipla' value=<?php echo "$perguntaMultipla"; ?>>
                    <input type='hidden' name='opcao1' value=<?php echo "$opcao1"; ?>>
                    <input type='hidden' name='opcao2' value=<?php echo "$opcao2"; ?>>
                    <input type='hidden' name='opcao3' value=<?php echo "$opcao3"; ?>>
                    <input type='hidden' name='respostaMultipla' value=<?php echo "$respostaMultipla"; ?>>
                    <input type='submit' value='Alterar' class='botao-alterar'>
                  </form>
                </td>
                <td class="td-botoes">
                  <form action='excluir.php' method='POST'>
                    <input type='hidden' name='idMultipla' value=<?php echo "$idMultipla"; ?>>
                    <input type='hidden' name='perguntaMultipla' value=<?php echo "$perguntaMultipla"; ?>>
                    <input type='hidden' name='opcao1' value=<?php echo "$opcao1"; ?>>
                    <input type='hidden' name='opcao2' value=<?php echo "$opcao2"; ?>>
                    <input type='hidden' name='opcao3' value=<?php echo "$opcao3"; ?>>
                    <input type='hidden' name='respostaMultipla' value=<?php echo "$respostaMultipla"; ?>>
                    <input type='submit' value='Excluir' class='botao-excluir'>
                  </form>
                </td>
              </tr>
              <?php
            }
            ?>

            <?php
          }
          while (!feof($arquivoMultiplaIn))
            fclose($arquivoMultiplaIn);
          ?>

        <?php } ?>
    </div>

    <!-- PERGUNTAS E RESPOSTAS TEXTO -->
    <?php
    if (!file_exists($fileTexto)) {
      echo "<h3>Arquivo Texto não existe</h3>";
    } else {
      ?>

      <h3 class="subtitulo">Perguntas e Respostas de Multipla Escolha:</h3>

      <table>
        <tr>
          <th>ID</th>
          <th>Pergunta</th>
          <th>Resposta</th>
        </tr>

        <h3 class="subtitulo">Perguntas e Respostas de Texto:</h3>

        <?php
        while (!feof($arquivoTextoIn)) {
          $linhas = fgets($arquivoTextoIn);
          $colunaDados = explode(";", $linhas);

          if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2])) {
            $idTexto = $colunaDados[0];
            $perguntaTexto = $colunaDados[1];
            $respostaTexto = $colunaDados[2];
            ?>

            <tr style='text-align:center;'>
              <td>
                <?php echo "$idTexto"; ?>
              </td>
              <td>
                <?php echo "$perguntaTexto"; ?>
              </td>
              <td>
                <?php echo "$respostaTexto"; ?>
              </td>

              <?php
              $perguntaTexto = urlencode($perguntaTexto);
              $respostaTexto = urlencode($respostaTexto);
              ?>
              <td class="td-botoes">
                <form action='alterarTexto.php' method='POST'>
                  <input type='hidden' name='idTexto' value=<?php echo "$idTexto"; ?>>
                  <input type='hidden' name='perguntaTexto' value=<?php echo "$perguntaTexto"; ?>>
                  <input type='hidden' name='respostaTexto' value=<?php echo "$respostaTexto"; ?>>
                  <input type='submit' value='Alterar' class="botao-alterar">
                </form>
              </td>
              <td class="td-botoes">
                <form action='excluir.php' method='POST'>
                  <input type='hidden' name='idTexto' value=<?php echo "$idTexto"; ?>>
                  <input type='hidden' name='perguntaTexto' value=<?php echo "$perguntaTexto"; ?>>
                  <input type='hidden' name='respostaTexto' value=<?php echo "$respostaTexto"; ?>>
                  <input type='submit' value='Excluir' class="botao-excluir">
                </form>
              </td>
            </tr>
            <?php
          }
          ?>

          <?php
        }
        while (!feof($arquivoTextoIn))
          fclose($arquivoTextoIn);
        ?>

      <?php } ?>
  </main>
</body>

</html>