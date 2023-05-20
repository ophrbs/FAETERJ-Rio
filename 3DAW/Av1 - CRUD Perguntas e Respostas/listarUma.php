<?php
$achou = 0;

if (isset($_POST['idTexto'])) {
  $idTexto = $_POST['idTexto'];
  $fileTexto = "perguntaTexto.txt";
  if (file_exists($fileTexto)) {
    $arquivoTextoIn = fopen("perguntaTexto.txt", "r");
    $linhas = fgets($arquivoTextoIn);
  }

  while (!feof($arquivoTextoIn)) {
    $linhas = fgets($arquivoTextoIn);
    $colunaDados = explode(";", $linhas);

    if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2])) {
      if (($colunaDados[0]) == $idTexto) {
        $idTexto = $colunaDados[0];
        $perguntaTexto = $colunaDados[1];
        $respostaTexto = $colunaDados[2];
        $achou = 1;
      }
    }
  }
}

if (isset($_POST['idMultipla'])) {
  $idMultipla = $_POST['idMultipla'];
  $fileMultipla = "perguntaMultipla.txt";
  if (file_exists($fileMultipla)) {
    $arquivoMultiplaIn = fopen("perguntaMultipla.txt", "r");
    $linhas = fgets($arquivoMultiplaIn);
  }

  while (!feof($arquivoMultiplaIn)) {
    $linhas = fgets($arquivoMultiplaIn);
    $colunaDados = explode(";", $linhas);

    if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2]) && isset($colunaDados[3]) && isset($colunaDados[4]) && isset($colunaDados[5])) {
      if (($colunaDados[0]) == $idMultipla) {
        $idMultipla = $colunaDados[0];
        $perguntaMultipla = $colunaDados[1];
        $opcao1 = $colunaDados[2];
        $opcao2 = $colunaDados[3];
        $opcao3 = $colunaDados[4];
        $respostaMultipla = $colunaDados[5];
        $achou = 2;
      }
    }
  }
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

  <h1>Exibindo Pergunta Buscada</h1>
  <?php
  if ($achou == 0) {
    echo "ID não encontrada";
  } else if ($achou == 1) {
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
        <tr style="text-align: center">
          <?php
          echo "<td>$idTexto</td>
      <td>$perguntaTexto</td>
      <td>$respostaTexto</td>
    </tr>";
  } else if ($achou == 2) { ?>
            <table style="border: 1px solid black; width:800px;">
              <tr>
                <th style="padding: 10px 20px;">Pergunta e Resposta de Multipla Escolha:</th>
              </tr>
              <tr>
                <th>ID</th>
                <th>Pergunta</th>
                <th>Opção 1</th>
                <th>Opção 2</th>
                <th>Opção 3</th>
                <th>Resposta</th>
              </tr>
              <tr style="text-align: center">
              <?php
              echo "<td>$idMultipla</td>
      <td>$perguntaMultipla</td>
      <td>$opcao1</td>
      <td>$opcao2</td>
      <td>$opcao3</td>
      <td>$respostaMultipla</td>
    </tr>";
              ?>
          <?php } ?>
      </table>
</body>

</html>