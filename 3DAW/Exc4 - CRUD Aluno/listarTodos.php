<?php
$fileAlunos = "listaAlunos.txt";
if (file_exists($fileAlunos)) {
  $nomeAluno = "";
  $cpfAluno = "";
  $arquivoAlunosIn = fopen("listaAlunos.txt", "r");
  $linhas = fgets($arquivoAlunosIn);
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
    <?php
    if (!file_exists($fileAlunos)) {
      echo "<h3>Lista de Alunos não existe</h3>";
    } else {
      ?>

      <h1>Lista de Alunos:</h1>
      <table>
        <tr>
          <th style='border: 1px solid black;'>ID</th>
          <th style='border: 1px solid black;'>Nome</th>
          <th style='border: 1px solid black;'>CPF</th>
        </tr>

        <?php
        while (!feof($arquivoAlunosIn)) {
          $linhas = fgets($arquivoAlunosIn);
          $colunaDados = explode(";", $linhas);

          if (isset($colunaDados[0]) && isset($colunaDados[1]) && isset($colunaDados[2])) {
            $idAluno = $colunaDados[0];
            $nomeAluno = $colunaDados[1];
            $cpfAluno = $colunaDados[2];
            ?>

            <tr style='text-align:center;'>
              <td>
                <?php echo "$idAluno"; ?>
              </td>
              <td>
                <?php echo "$nomeAluno"; ?>
              </td>
              <td>
                <?php echo "$cpfAluno"; ?>
              </td>

              <?php
              $nomeAluno = urlencode($nomeAluno);
              $cpfAluno = urlencode($cpfAluno);
              ?>
              <td>
                <form action=' alterar.php' method='POST'>
                  <input type='hidden' name='idAluno' value=<?php echo "$idAluno"; ?>>
                  <input type='hidden' name='nomeAluno' value=<?php echo "$nomeAluno"; ?>>
                  <input type='hidden' name='cpfAluno' value=<?php echo "$cpfAluno"; ?>>
                  <input type='submit' value='Alterar'>
                </form>
              </td>
              <td>
                <form action='excluir.php' method='POST'>
                  <input type='hidden' name='idAluno' value=<?php echo "$idAluno"; ?>>
                  <input type='hidden' name='nomeAluno' value=<?php echo "$nomeAluno"; ?>>
                  <input type='hidden' name='cpfAluno' value=<?php echo "$cpfAluno"; ?>>
                  <input type='submit' value='Excluir'>
                </form>
              </td>
            </tr>
            <?php
          }
          ?>

        <?php
        }
        while (!feof($arquivoAlunosIn))
          fclose($arquivoAlunosIn);
        ?>

      <?php } ?>
  </main>
</body>

</html>