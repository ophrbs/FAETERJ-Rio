<?php
switch ($_REQUEST["acao"]) {
 case 'incluir_candidato':
 $nome_candidato = $_POST["nome_candidato"];
 $sala_candidato = $_POST["sala_candidato"];
 $cpf_candidato = $_POST["cpf_candidato"];
 $identidade_candidato = $_POST["identidade_candidato"];
 $email_candidato = $_POST["email_candidato"];
 $cargo_candidato = $_POST["cargo_candidato"];
 
 $sql = "INSERT INTO tabela_candidatos (nome_candidato, sala_candidato, cpf_candidato, identidade_candidato, email_candidato, cargo_candidato)
 VALUES ('{$nome_candidato}', '{$sala_candidato}', '{$cpf_candidato}', '{$identidade_candidato}', '{$email_candidato}', '{$cargo_candidato}')";
 $res = $conn->query($sql);
 
 if ($res == true) {
	 print "<script>alert('Candidato cadastrado com sucesso');</script>";
	 print "<script>location.href='?page=listar_candidatos';</script>";
 } else {
	 print "<script>alert('ERRO: o cadastro não pôde ser realizado');</script>";
	 print "<script>location.href='?page=listar_candidatos';</script>";
 }
 break;
 
 case 'incluir_fiscal':
 $nome_fiscal = $_POST["nome_fiscal"];
 $sala_fiscal = $_POST["sala_fiscal"];
 $cpf_fiscal = $_POST["cpf_fiscal"];
 
 $sql = "INSERT INTO tabela_fiscais (nome_fiscal, sala_fiscal, cpf_fiscal)
 VALUES ('{$nome_fiscal}', '{$sala_fiscal}', '{$cpf_fiscal}')";
 $res = $conn->query($sql);
 
 if ($res == true) {
	 print "<script>alert('Fiscal cadastrado com sucesso');</script>";
	 print "<script>location.href='?page=listar_candidatos';</script>";
 } else {
	 print "<script>alert('ERRO: o fiscal não pôde ser realizado');</script>";
	 print "<script>location.href='?page=listar_candidatos';</script>";
 }
 break;
 
 case 'alterar_sala':
 $sala_candidato = $_POST["sala_candidato"];
 
 $sql = "UPDDATE tabela_candidatos SET sala_candidato='{$tabela_candidato}' WHERE id_candidato=" . $_REQUEST["id_candidato"];
 $res = $conn->query($sql);
 
 if ($res == true) {
	 print "<script>alert('Sala alterada com sucesso');</script>";
	 print "<script>location.href='?page=listar_candidatos';</script>";
 } else {
	 print "<script>alert('ERRO: a sala não pôde ser realizado');</script>";
	 print "<script>location.href='?page=listar_candidatos';</script>";
 }
 break;
}
?>