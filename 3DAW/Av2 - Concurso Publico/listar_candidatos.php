<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$ordem = $_POST["ordem"];
	if ($ordem == "nome") {
		$sql = "SELECT * FROM tabela_candidatos ORDER BY nome_candidato";
	} else {
		$sql = "SELECT * FROM tabela_candidatos ORDER BY sala_candidato";
	}
} else {
	$sql = "SELECT * FROM tabela_candidatos";
}
$res = $conn->query($sql);
$qtd = $res->num_rows;
?>
<h1>Tabela de Candidatos</h1>
<div class="div-ordenar-tabela">
	<p>Organizar por:</p>
	<form method="POST">
		<input type="radio" id="ordem-nome" name="ordem" value="nome" class="radio-input" required>
		<label for="ordem-nome">Nome</label>
		<input type="radio" id="ordem-sala" name="ordem" value="sala" class="radio-input">
		<label for="sala-nome">Sala</label>
		<button type="submit" class="btn-form">Atualizar</button>
	</form>
</div>
<?php
if ($qtd > 0) {
	print "<table class='tabela'>";
	print "<tr class='tabela-titulo'>";
	print "<th>Nome</th>";
	print "<th>CPF</th>";
	print "<th>Identidade</th>";
	print "<th>E-mail</th>";
	print "<th>Cargo</th>";
	print "<th>Sala</th>";
	print "<th>Ação</th>";
	print "</tr>";
	while ($row = $res->fetch_object()) {
		print "<tr>";
		print "<td>" . $row->nome_candidato . "</td>";
		print "<td>" . $row->cpf_candidato . "</td>";
		print "<td>" . $row->identidade_candidato . "</td>";
		print "<td>" . $row->email_candidato . "</td>";
		print "<td>" . $row->cargo_candidato . "</td>";
		print "<td>" . $row->sala_candidato . "</td>";
		print "<td><button onclick=\"location.href='?page=alterar_sala&id_candidato=" . $row->id_candidato . "';\">Alterar Sala</button>";
		print "</tr>";
	}
	print "</table>";
} else {
	print "<p>Não há candidatos registrados</p>";
}
?>