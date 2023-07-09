<!-- <?php
if (isset($_POST['idAlunoAlterar']) && isset($_POST['nomeAlunoAlterar']) && isset($_POST['cpfAlunoAlterar'])) {
  $idAlunoAlterar = urldecode($_POST["idAlunoAlterar"]);
  $nomeAlunoAlterar = urldecode($_POST["nomeAlunoAlterar"]);
  $cpfAlunoAlterar = urldecode($_POST["cpfAlunoAlterar"]);

  // Adicionar alterado
  if (!file_exists("listaAlunos.txt")) {
    $cabecalho = "idAluno;nomeAluno;cpfAluno;\n";
    $arquivoAlunos = fopen("listaAlunos.txt", "w");
    fwrite($arquivoAlunos, $cabecalho);
    fclose($arquivoAlunos);
  }
  $arquivoAlunos = fopen("listaAlunos.txt", "a");
  $txt = $idAlunoAlterar . ";" . $nomeAlunoAlterar . ";" . $cpfAlunoAlterar . "\n";
  fwrite($arquivoAlunos, $txt);
  fclose($arquivoAlunos);

  // Excluir antigo
  $idAlunoAntiga = urldecode($_POST['idAluno']);
  $nomeAlunoAntiga = urldecode($_POST['nomeAluno']);
  $cpfAlunoAntiga = urldecode($_POST["cpfAluno"]);

  $nomeArquivo = 'listaAlunos.txt';
  $variavelProcurada = "$idAlunoAntiga;$nomeAlunoAntiga;$cpfAlunoAntiga";

  $linhas = file($nomeArquivo);
  $arquivo = fopen($nomeArquivo, 'w');
  if ($arquivo) {
    foreach ($linhas as $linha) {
      if (strpos($linha, $variavelProcurada) === false) {
        fwrite($arquivo, $linha);
      }
    }
    fclose($arquivo);
  }
}
?> -->

<!DOCTYPE html>
<html lang="en">

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
    <h1>Alterar Aluno:</h1>
    <?php
    //checar se as variaveis chegaram
    if (isset($_POST['idAlunoAlterar']) && isset($_POST['nomeAlunoAlterar']) && isset($_POST['cpfAlunoAlterar'])) {
      echo "Dados do aluno alterada!";
    } else
      if (isset($_POST['idAluno']) && isset($_POST['nomeAluno']) && isset($_POST['cpfAluno'])) {
        $idAluno = urldecode($_POST['idAluno']);
        $nomeAluno = urldecode($_POST['nomeAluno']);
        $cpfAluno = urldecode($_POST["cpfAluno"]);
        $idAlunoAlterar = $idAluno;

        ?>
        <form action="alterar.php" method="POST">
          <label for="idAluno">ID:</label>
          <input type="number" value="<?php echo $idAluno ?>" disabled>

          <label for="nomeAlunoAlterar">Nome:</label>
          <input type="text" name="nomeAlunoAlterar" size="50" value="<?php echo $nomeAluno ?>" required>

          <label for=" cpfAlunoAlterar">CPF:</label>
          <input type="text" name="cpfAlunoAlterar" size="50" value="<?php echo $cpfAluno ?>" required>

          <input type="text" name="idAlunoAlterar" value="<?php echo $idAlunoAlterar ?>" style="display:none;">
          <input type="text" name="idAluno" value="<?php echo $idAluno ?>" style="display:none;">
          <input type="text" name="nomeAluno" value="<?php echo $nomeAluno ?>" style="display:none;">
          <input type="text" name="cpfAluno" value="<?php echo $cpfAluno ?>" style="display:none;">
          <input type="submit" value="Enviar">
        </form>
        <?php
      } else {
        echo "Acesse a lista de Alunos para editar um Aluno";
      }
    ?>
  </main>
</body>

</html>