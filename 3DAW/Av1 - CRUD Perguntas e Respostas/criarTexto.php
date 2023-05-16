<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pergunta = $_POST["pergunta"];
  $resposta = $_POST["resposta"];
  if (!file_exists("perguntaTexto.txt")) {
    $cabecalho = "pergunta;resposta;\n";
    $arquivoTexto = fopen("perguntaTexto.txt", "w");
    fwrite($arquivoTexto, $cabecalho);
    fclose($arquivoTexto);
  }
  $arquivoTexto = fopen("perguntaTexto.txt", "a");
  $txt = $pergunta . ";" . $resposta . "\n";
  fwrite($arquivoTexto, $txt);
  fclose($arquivoTexto);
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
  <h1>Criar Pergunta e Resposta de Texto:</h1>
  <form action="criarTexto.php" method="POST">
    <label for="pergunta">Pergunta:</label>
    <input type="text" name="pergunta">

    <label for="resposta">Resposta:</label>
    <input type="text" name="resposta">

    <input type="submit" value="Enviar">
  </form>
</body>

</html>