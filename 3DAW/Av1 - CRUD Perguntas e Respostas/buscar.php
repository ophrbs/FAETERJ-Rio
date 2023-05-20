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
    <h1 class="titulo1">Buscar uma Pergunta de Texto:</h1>
    <form action="listarUma.php" method="POST">
      <div>
        <label for="idTexto">ID:</label>
        <input type="number" name="idTexto">
        <input type="submit" value="Buscar" class="botao" style="padding: 5px 10px;">
      </div>
    </form>

    <h1 class="titulo1">Buscar uma Pergunta de Multipla Escolha:</h1>
    <form action="listarUma.php" method="POST">
      <div>
        <label for="idMultipla">ID:</label>
        <input type="number" name="idMultipla">
        <input type="submit" value="Buscar" class="botao" style="padding: 5px 10px;">
      </div>
    </form>
  </main>
</body>

</html>