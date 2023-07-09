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
    <h1>Excluir</h1>
    <?php
    //checar se as variaveis chegaram
    if (isset($_POST['idAluno']) && isset($_POST['nomeAluno']) && isset($_POST['cpfAluno'])) {
      $idAluno = $_POST['idAluno'];
      $nomeAluno = urldecode($_POST['nomeAluno']);
      $cpfAluno = urldecode($_POST["cpfAluno"]);

      $nomeArquivo = 'listaAlunos.txt';
      $variavelProcurada = "$idAluno;$nomeAluno;$cpfAluno";
    }
    // Ler o conteúdo do arquivo para um array
    $linhas = file($nomeArquivo);

    // Abrir o arquivo em modo de escrita
    $arquivo = fopen($nomeArquivo, 'w');

    if ($arquivo) {
      foreach ($linhas as $linha) {
        // Verificar se a linha contém a variável procurada
        if (strpos($linha, $variavelProcurada) === false) {
          // Se não contém, escrever a linha novamente no arquivo
          fwrite($arquivo, $linha);
        }
      }
      fclose($arquivo);

      echo "Aluno '{$nomeAluno}' removido com sucesso!";
    } else {
      echo "Não foi possível abrir o arquivo.";
    }
    ?>
  </main>
</body>

</html>