<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idMultipla = $_POST["idMultipla"];
  $pergunta = $_POST["pergunta"];
  $opcao1 = $_POST["opcao1"];
  $opcao2 = $_POST["opcao2"];
  $opcao3 = $_POST["opcao3"];
  $respostaMultipla = $_POST["respostaMultipla"];
  if (!file_exists("perguntaMultipla.txt")) {
    $cabecalho = "idMultipla;pergunta;opcao1;opcao2;opcao3;respostaMultipla\n";
    $arquivoMultipla = fopen("perguntaMultipla.txt", "w");
    fwrite($arquivoMultipla, $cabecalho);
    fclose($arquivoMultipla);
  }
  $arquivoMultipla = fopen("perguntaMultipla.txt", "a");
  $txt = $idMultipla . ";" . $pergunta . ";" . $opcao1 . ";" . $opcao2 . ";" . $opcao3 . ";" . $respostaMultipla . "\n";
  fwrite($arquivoMultipla, $txt);
  fclose($arquivoMultipla);
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
    <h1 class="titulo1">Criar Pergunta e Resposta de Multipla Escolha:</h1>
    <form action="criarMultipla.php" method="POST" class="formulario">
      <div class="id-div">
        <label for="idMultipla">ID:</label>
        <input type="number" name="idMultipla" required>
        [Atenção! a ID da pergunta não poderá ser alterada e será seu identificador]
      </div>

      <label for="pergunta">Pergunta:</label>
      <input type="text" name="pergunta" size="50" required>

      <div class="div-opcoes">
        <label for="resposta" class="label-opcao1">Opção 1:</label>
        <input type="text" name="opcao1" class="input-opcao1" required>

        <label for="resposta" class="label-opcao2">Opção 2:</label>
        <input type="text" name="opcao2" class="input-opcao2" required>

        <label for="resposta" class="label-opcao3">Opção 3:</label>
        <input type="text" name="opcao3" class="input-opcao3">
      </div>

      <label for="resposta">Resposta:</label>
      <input type="text" name="respostaMultipla" size="50" required>

      <input type="submit" value="Enviar" class="botao">
    </form>
  </main>
</body>

</html>