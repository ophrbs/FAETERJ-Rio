<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idTexto = $_POST["idTexto"];
  $pergunta = $_POST["pergunta"];
  $resposta = $_POST["resposta"];
  if (!file_exists("perguntaTexto.txt")) {
    $cabecalho = "idTexto;pergunta;resposta;\n";
    $arquivoTexto = fopen("perguntaTexto.txt", "w");
    fwrite($arquivoTexto, $cabecalho);
    fclose($arquivoTexto);
  }
  $arquivoTexto = fopen("perguntaTexto.txt", "a");
  $txt = $idTexto . ";" . $pergunta . ";" . $resposta . "\n";
  fwrite($arquivoTexto, $txt);
  fclose($arquivoTexto);
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
    <h1 class="titulo1">Criar Pergunta e Resposta de Texto:</h1>
    <form action="criarTexto.php" method="POST" class="formulario">
      <div class="id-div">
        <label for="idTexto">ID:</label>
        <input type="number" name="idTexto" required>
        [Atenção! a ID da pergunta não poderá ser alterada e será seu identificador]
      </div>

      <label for="pergunta">Pergunta:</label>
      <input type="text" name="pergunta" size="50" required>

      <label for="resposta">Resposta:</label>
      <input type="text" name="resposta" size="50" required>

      <input type="submit" value="Enviar" class="botao">
    </form>
  </main>
</body>

</html>