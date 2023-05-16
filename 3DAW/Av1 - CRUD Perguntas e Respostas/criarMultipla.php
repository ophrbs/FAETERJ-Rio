<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pergunta = $_POST["pergunta"];
  $resposta1 = $_POST["resposta1"];
  $resposta2 = $_POST["resposta2"];
  $resposta3 = $_POST["resposta3"];
  if (!file_exists("perguntaMultipla.txt")) {
    $cabecalho = "pergunta;resposta1;resposta2;resposta3;\n";
    $arquivoMultipla = fopen("perguntaMultipla.txt", "w");
    fwrite($arquivoMultipla, $cabecalho);
    fclose($arquivoMultipla);
  }
  $arquivoMultipla = fopen("perguntaMultipla.txt", "a");
  $txt = $pergunta . ";" . $resposta1 . ";" . $resposta2 . ";" . $resposta3 . "\n";
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
    <input type="text" name="pergunta">

    <h3>Opções de respostas:</h3>
    <label for="resposta">Oppção 1:</label>
    <input type="text" name="resposta1">
    <label for="resposta">Oppção 2:</label>
    <input type="text" name="resposta2">
    <label for="resposta">Oppção 3:</label>
    <input type="text" name="resposta3">

    <input type="submit" value="Enviar">
  </form>
</body>

</html>