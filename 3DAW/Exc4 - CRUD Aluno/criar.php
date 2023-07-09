<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idAluno = $_POST["idAluno"];
  $nomeAluno = $_POST["nomeAluno"];
  $cpfAluno = $_POST["cpfAluno"];
  if (!file_exists("listaAlunos.txt")) {
    $cabecalho = "idAluno;nomeAluno;cpfAluno;\n";
    $arquivoAlunos = fopen("listaAlunos.txt", "w");
    fwrite($arquivoAlunos, $cabecalho);
    fclose($arquivoAlunos);
  }
  $arquivoAlunos = fopen("listaAlunos.txt", "a");
  $txt = $idAluno . ";" . $nomeAluno . ";" . $cpfAluno . "\n";
  fwrite($arquivoAlunos, $txt);
  fclose($arquivoAlunos);
}
?>

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
    <h1>Criar:</h1>
    <form action="criar.php" method="POST">
      <label for="idAluno">ID:</label>
      <input type="number" name="idAluno" required>
      <label for="nomeAluno">Name:</label>
      <input type="text" name="nomeAluno" size="50" required>

      <label for="cpfAluno">CPF:</label>
      <input type="text" name="cpfAluno" size="50" required>

      <input type="submit" value="Enviar">
    </form>
  </main>
</body>

</html>