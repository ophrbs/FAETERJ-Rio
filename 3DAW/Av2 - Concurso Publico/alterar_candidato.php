<h1>Alterar Sala de Candidato</h1>
<?php
$sql = "SELECT * FROM tabela_candidato WHERE id_candidato=" . $_REQUEST["id_candidato"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
<input type="hidden" name="acao" value="alterar_sala">
<input type="hidden" name="id_candidato" value="<?php print $row->id_candidato; ?>">

<label for="nome_candidato">Nome</label>
<input type="text" name="nome_candidato" value="<?php print $row->nome_candidato; ?>">
	
<label for="sala_candidato">Sala de Prova</label>
<input type="text" name="sala_candidato" value="<?php print $row->sala_candidato; ?>">
	
<label for="cpf_candidato">CPF</label>
<input type="text" name="cpf_candidato" value="<?php print $row->cpf_candidato; ?>">
	
<label for="identidade_candidato">Identidade</label>
<input type="text" name="identidade_candidato" value="<?php print $row->identidade_candidato; ?>">
	
<label for="email_candidato">E-mail</label>
<input type="mail" name="email_candidato" value="<?php print $row->email_candidato; ?>">
	
<label for="cargo_candidato">Cargo</label>
<input type="text" name="cargo_candidato" value="<?php print $row->cargo_candidato; ?>">
	
<button type="submit">Enviar</button>
</form>