<?php
	$sql = "SELECT * FROM tabela_candidatos";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	
	print "<h1>Tabela Candidatos</h1>";
	if ($qtd > 0) {
		print "<table>";
		print "<tr>";
		print "<th>Nome</th>";
		print "<th>Sala</th>";
		print "<th>CPF</th>";
		print "<th>Identidade</th>";
		print "<th>E-mail</th>";
		print "<th>Cargo</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>" . $row->nome_candidato . "</td>";
			print "<td>" . $row->sala_candidato . "</td>";
			print "<td>" . $row->cpf_candidato . "</td>";
			print "<td>" . $row->identidade_candidato . "</td>";
			print "<td>" . $row->email_candidato . "</td>";
			print "<td>" . $row->cargo_candidato . "</td>";
			print "<td><button onclick=\"location.href='?page=editar_sala&id_sala=" . $row->id_sala . "';\">Editar Sala</button>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "<p>Não há candidatos registrados</p>";
	}
?>