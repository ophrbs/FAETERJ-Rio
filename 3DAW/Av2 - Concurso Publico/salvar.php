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
			print "<script>alert('ERRO: o cadastro não pôde ser realizado. Verifique a conexão com o banco de dados');</script>";
			print "<script>location.href='?page=listar_candidatos';</script>";
		}
		break;

	case 'incluir_fiscal':
		$sala_fiscal = $_POST["sala_fiscal"];

		$nome_fiscal1 = $_POST["nome_fiscal1"];
		$cpf_fiscal1 = $_POST["cpf_fiscal1"];

		$nome_fiscal2 = $_POST["nome_fiscal2"];
		$cpf_fiscal2 = $_POST["cpf_fiscal2"];

		$sql = "INSERT INTO tabela_fiscais (nome_fiscal, sala_fiscal, cpf_fiscal)
 VALUES ('{$nome_fiscal1}', '{$sala_fiscal}', '{$cpf_fiscal1}')";
		$res = $conn->query($sql);

		$sql = "INSERT INTO tabela_fiscais (nome_fiscal, sala_fiscal, cpf_fiscal)
	VALUES ('{$nome_fiscal2}', '{$sala_fiscal}', '{$cpf_fiscal2}')";

		$res = $conn->query($sql);

		if ($res == true) {
			print "<script>alert('Fiscais e sala cadastrados com sucesso');</script>";
			print "<script>location.href='?page=listar_fiscais';</script>";
		} else {
			print "<script>alert('ERRO: o cadastro não pôde ser realizado. Verifique a conexão com o banco de dados');</script>";
			print "<script>location.href='?page=listar_fiscais';</script>";
		}
		break;

	case 'alterar_sala':
		$sala_candidato = $_POST["sala_candidato"];

		$sql = "UPDATE tabela_candidatos SET sala_candidato='{$sala_candidato}' WHERE id_candidato=" . $_REQUEST["id_candidato"];
		$res = $conn->query($sql);

		if ($res == true) {
			print "<script>alert('Sala alterada com sucesso');</script>";
			print "<script>location.href='?page=listar_candidatos';</script>";
		} else {
			print "<script>alert('ERRO: a alteração não pôde ser realizada. Verifique a conexão com o banco de dados');</script>";
			print "<script>location.href='?page=listar_candidatos';</script>";
		}
		break;
}
?>