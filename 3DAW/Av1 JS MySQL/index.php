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
      <a href="index.php" aria-current="page">Início</a>
      <a href="?page=criarTexto">Criar Pergunta de Texto</a>
      <a href="?page=criarMultipla">Criar Pergunta de Multipla Escolha</a>
      <a href="?page=listar">Listar Perguntas</a>
      <h4>Para Alterar ou Excluir uma pergunta, acesse a Lista de Perguntas!</h4>
    </nav>
  </header>
  <main>
    <?php
    include("config.php");
    switch (@$_REQUEST["page"]) {
      case "criarTexto":
        include("criarTexto.php");
        break;
      case "criarMultipla":
        include("criarMultipla.php");
        break;
      case "listar":
        include("listarTodas.php");
        break;
      case "salvar":
        include("salvar.php");
        break;
      case "editar_texto":
        include("alterarTexto.php");
        break;
      case "editar_multipla":
        include("alterarMultipla.php");
        break;
      default:
        print "<h1 class='titulo1'>AV1 - CRUD EM PHP</h1>
        <h2 class='subtitulo'>Orientações</h2>
        <p>Perguntas de Texto e de Múltipla Escolha</p>
        <ul>
          <li>Criar Perguntas e respostas</li>
          <li>Alterar Perguntas e suas respostas</li>
          <li>Listar Perguntas e repostas.</li>
          <li>Excluir Pergunta e respostas</li>
        </ul>
    
        <h3>Utilize a barra de navegação para acessar as funções do CRUD</h3>";
    }
    ?>
  </main>
</body>

</html>