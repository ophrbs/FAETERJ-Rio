<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrar_texto':
    $pergunta_texto = $_POST["pergunta_texto"];
    $resposta_texto = $_POST["resposta_texto"];

    $sql = "INSERT INTO tabela_texto (pergunta_texto, resposta_texto) VALUES ('{$pergunta_texto}', '{$resposta_texto}')";

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Pergunta cadastrada com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('ERRO! a pergunta não pôde ser cadastrada');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case 'cadastrar_multipla':
    $pergunta_multipla = $_POST["pergunta_multipla"];
    $opcao1_multipla = $_POST["opcao1_multipla"];
    $opcao2_multipla = $_POST["opcao2_multipla"];
    $opcao3_multipla = $_POST["opcao3_multipla"];
    $resposta_multipla = $_POST["resposta_multipla"];

    $sql = "INSERT INTO tabela_multipla (pergunta_multipla, opcao1_multipla, opcao2_multipla, opcao3_multipla, resposta_multipla) VALUES ('{$pergunta_multipla}', '{$opcao1_multipla}', '{$opcao2_multipla}', '{$opcao3_multipla}', '{$resposta_multipla}')";

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Pergunta cadastrada com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alert('ERRO! a pergunta não pôde ser cadastrada');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case 'editar_texto':
    $pergunta_texto = $_POST["pergunta_texto"];
    $resposta_texto = $_POST["resposta_texto"];

    $sql = "UPDATE tabela_texto SET pergunta_texto='{$pergunta_texto}', resposta_texto='{$resposta_texto}' WHERE id_texto=" . $_REQUEST["id_texto"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alerta('Pergunta alterada com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alerta('ERRO! a pergunta não pôde ser editada');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case 'editar_multipla':
    $pergunta_multipla = $_POST["pergunta_multipla"];
    $opcao1_multipla = $_POST["opcao1_multipla"];
    $opcao2_multipla = $_POST["opcao2_multipla"];
    $opcao3_multipla = $_POST["opcao3_multipla"];
    $resposta_multipla = $_POST["resposta_multipla"];

    $sql = "UPDATE tabela_multipla SET pergunta_multipla='{$pergunta_multipla}', opcao1_multipla='{$opcao1_multipla}', opcao2_multipla='{$opcao2_multipla}', opcao3_multipla='{$opcao3_multipla}', resposta_multipla='{$resposta_multipla}' WHERE id_multipla=" . $_REQUEST["id_multipla"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alerta('Pergunta alterada com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alerta('ERRO! a pergunta não pôde ser editada');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case 'excluir_texto':

    $sql = "DELETE FROM tabela_texto WHERE id_texto=" . $_REQUEST["id_texto"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alerta('pergunta excluida com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alerta('ERRO! a pergunta não pôde ser excluida');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;

  case 'excluir_multipla':

    $sql = "DELETE FROM tabela_multipla WHERE id_multipla=" . $_REQUEST["id_multipla"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alerta('pergunta excluida com sucesso!');</script>";
      print "<script>location.href='?page=listar';</script>";
    } else {
      print "<script>alerta('ERRO! a pergunta não pôde ser excluida');</script>";
      print "<script>location.href='?page=listar';</script>";
    }
    break;
}
?>