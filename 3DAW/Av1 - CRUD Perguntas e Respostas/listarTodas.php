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
  <title>AV1 3DAW Leandro Herbas</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.html">Início</a>
    </nav>
  </header>
  <main>
    <div>
      <h1>Perguntas e Respostas:</h1>

      <?php
      if (!file_exists($fileMultipla)) {
        echo "<h3>Arquivo de Multipla não existe</h3>";
      } else {
        ?>

        <table style="border: 1px solid black; width:800px">
          <tr>
            <th style="padding: 10px 0;">Perguntas e Respostas Múltipla Escolha:</th>
          </tr>
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
              echo "
          <tr style='text-align:center;'>
          <td>$idMultipla</td>
          <td>$perguntaMultipla</td>
          <td>$opcao1</td>
          <td>$opcao2</td>
          <td>$opcao3</td>
          <td>$respostaMultipla</td>";
              $perguntaMultipla = urlencode($perguntaMultipla);
              $opcao1 = urlencode($opcao1);
              $opcao2 = urlencode($opcao2);
              $opcao3 = urlencode($opcao3);
              $respostaMultipla = urlencode($respostaMultipla);
              echo "
          <td>
          <form action='excluir.php' method='POST'>
          <input type='hidden' name='idMultipla' value=$idMultipla>
          <input type='hidden' name='perguntaMultipla' value=$perguntaMultipla>
          <input type='hidden' name='opcao1' value=$opcao1>
          <input type='hidden' name='opcao2' value=$opcao2>
          <input type='hidden' name='opcao3' value=$opcao3>
          <input type='hidden' name='respostaMultipla' value=$respostaMultipla>
          <input type='submit' value='Excluir'>
          </form>
          </td>
          <td>
          <form action='alterarMultipla.php' method='POST'>
          <input type='hidden' name='idMultipla' value=$idMultipla>
          <input type='hidden' name='perguntaMultipla' value=$perguntaMultipla>
          <input type='hidden' name='opcao1' value=$opcao1>
          <input type='hidden' name='opcao2' value=$opcao2>
          <input type='hidden' name='opcao3' value=$opcao3>
          <input type='hidden' name='respostaMultipla' value=$respostaMultipla>
          <input type='submit' value='Alterar'>
          </form>
          </td>
          </tr>";
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

      <table style="border: 1px solid black; width:800px;">
        <tr>
          <th style="padding: 10px 20px;">Perguntas e Respostas de Texto:</th>
        </tr>
        <tr>
          <th>ID</th>
          <th>Pergunta</th>
          <th>Resposta</th>
        </tr>

        <?php
        while (!feof($arquivoTextoIn)) {
          $linhas = fgets($arquivoTextoIn);
          $colunaDados = explode(";", $linhas);

          if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2])) {
            $idTexto = $colunaDados[0];
            $perguntaTexto = $colunaDados[1];
            $respostaTexto = $colunaDados[2];
            echo "
          <tr style='text-align:center;'>
          <td>$idTexto</td>
          <td>$perguntaTexto</td>
          <td>$respostaTexto</td>";
            $perguntaTexto = urlencode($perguntaTexto);
            $respostaTexto = urlencode($respostaTexto);
            echo "
          <td>
          <form action='excluir.php' method='POST'>
          <input type='hidden' name='idTexto' value=$idTexto>
          <input type='hidden' name='perguntaTexto' value=$perguntaTexto>
          <input type='hidden' name='respostaTexto' value=$respostaTexto>
          <input type='submit' value='Excluir'>
          </form>
          </td>
          <td>
          <form action='alterarTexto.php' method='POST'>
          <input type='hidden' name='idTexto' value=$idTexto>
          <input type='hidden' name='perguntaTexto' value=$perguntaTexto>
          <input type='hidden' name='respostaTexto' value=$respostaTexto>
          <input type='submit' value='Alterar'>
          </form>
          </td>
          </tr>";
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