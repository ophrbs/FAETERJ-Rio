<?php
$fileMultipla = "perguntaMultipla.txt";
if (file_exists($fileMultipla)) {
  $perguntaMultpla = "";
  $resposta1 = "";
  $resposta2 = "";
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD 3DAW EXIBIR</title>
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

        <table style="border: 1px solid black; width:500px">
          <tr>
            <th style="padding: 10px 0;">Perguntas e Respostas Múltipla Escolha:</th>
          </tr>
          <tr>
            <th>Pergunta</th>
            <th>Opção 1</th>
            <th>Opção 2</th>
            <th>Opção 3</th>
          </tr>

          <?php
          while (!feof($arquivoMultiplaIn)) {
            $linhas = fgets($arquivoMultiplaIn);
            $colunaDados = explode(";", $linhas);

            if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2]) && isset($colunaDados[3])) {
              $perguntaMultipla = $colunaDados[0];
              $resposta1 = $colunaDados[1];
              $resposta2 = $colunaDados[2];
              $resposta3 = $colunaDados[3];
              echo "
          <tr style='text-align:center;'>
          <td>$perguntaMultipla</td>
          <td>$resposta1</td>
          <td>$resposta2</td>
          <td>$resposta3</td>
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

      <table style="border: 1px solid black; width:500px;">
        <tr>
          <th style="padding: 10px 20px;">Perguntas e Respostas de Texto:</th>
        </tr>
        <tr>
          <th>Pergunta</th>
          <th>Resposta</th>
        </tr>

        <?php
        while (!feof($arquivoTextoIn)) {
          $linhas = fgets($arquivoTextoIn);
          $colunaDados = explode(";", $linhas);

          if (isset($colunaDados[0]) && isset($colunaDados[1])) {
            $perguntaTexto = $colunaDados[0];
            $respostaTexto = $colunaDados[1];
            echo "
          <tr style='text-align:center;'>
          <td>$perguntaTexto</td>
          <td>$respostaTexto</td>";
            $perguntaTexto = urlencode($perguntaTexto);
            $respostaTexto = urlencode($respostaTexto);
            echo "
          <td>
          <form action='excluir.php' method='POST'>
          <input type='hidden' name='perguntaTexto' value=$perguntaTexto>
          <input type='hidden' name='respostaTexto' value=$respostaTexto>
          <input type='submit' value='Excluir'>
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