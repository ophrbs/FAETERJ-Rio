<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>CRUD Aluno</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.html">Início</a>
      <a href="criar.php">Criar</a>
      <a href="listarTodos.php">Listar</a>
      <a href="buscar.php">Buscar</a>
      <h4></h4>
    </nav>
  </header>
  <main>
    <h1>Buscar um Aluno:</h1>
    <form action="listarUma.php" method="POST">
      <div>
        <label for="idAluno">ID:</label>
        <input type="number" name="idAluno">
        <input type="submit" value="Buscar" style="padding: 5px 10px;">
      </div>
    </form>
  </main>
</body>

</html>