<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AV1 3DAW Leandro Herbas</title>
</head>

<body>

</body>
<header>
  <nav>
    <a href="index.html">Início</a>
  </nav>
</header>
<h1>Buscar uma Pergunta de Texto:</h1>
<form action="listarUma.php" method="POST">
  <label for="idTexto">ID:</label>
  <input type="number" name="idTexto">
  <input type="submit" value="Buscar">
</form>

<h1>Buscar uma Pergunta de Multipla Escolha:</h1>
<form action="listarUma.php" method="POST">
  <label for="idMultipla">ID:</label>
  <input type="number" name="idMultipla">
  <input type="submit" value="Buscar">
</form>

</html>