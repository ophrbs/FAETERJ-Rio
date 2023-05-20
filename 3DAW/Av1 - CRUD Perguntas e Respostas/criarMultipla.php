<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pergunta = $_POST["pergunta"];
  $opcao1 = $_POST["opcao1"];
  $opcao2 = $_POST["opcao2"];
  $opcao3 = $_POST["opcao3"];
  $respostaMultipla = $_POST["respostaMultipla"];
  if (!file_exists("perguntaMultipla.txt")) {
    $cabecalho = "pergunta;opcao1;opcao2;opcao3;respostaMultipla\n";
    $arquivoMultipla = fopen("perguntaMultipla.txt", "w");
    fwrite($arquivoMultipla, $cabecalho);
    fclose($arquivoMultipla);
  }
  $arquivoMultipla = fopen("perguntaMultipla.txt", "a");
  $txt = $pergunta . ";" . $opcao1 . ";" . $opcao2 . ";" . $opcao3 . ";" . $respostaMultipla . "\n";
  fwrite($arquivoMultipla, $txt);
  fclose($arquivoMultipla);
}
?>

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
  <h1>Criar Pergunta e Resposta de Multipla Escolha:</h1>
  <form action="criarMultipla.php" method="POST">
    <label for="pergunta">Pergunta:</label>
    <input type="text" name="pergunta" required>

    <h3>Opções de respostas:</h3>
    <label for="resposta">Opção 1:</label>
    <input type="text" name="opcao1" required>
    <label for="resposta">Opção 2:</label>
    <input type="text" name="opcao2" required>
    <label for="resposta">Opção 3:</label>
    <input type="text" name="opcao3">
    <label for="resposta">Resposta:</label>
    <input type="text" name="respostaMultipla" required>

    <input type="submit" value="Enviar">
  </form>
</body>

</html>