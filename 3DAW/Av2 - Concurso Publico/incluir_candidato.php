<h1>Incluir Candidato</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="incluir_candidato">

	<label for="nome_candidato">Nome</label>
	<input type="text" name="nome_candidato" required>

	<label for="sala_candidato">Sala de Prova</label>
	<input type="text" placeholder="8 digitos" name="sala_candidato" required>

	<label for="cpf_candidato">CPF</label>
	<input type="text" placeholder="11 digitos" name="cpf_candidato" required>

	<label for="identidade_candidato">Identidade</label>
	<input type="text" placeholder="12 digitos" name="identidade_candidato" required>

	<label for="email_candidato">E-mail</label>
	<input type="email" placeholder="example@email.com" name="email_candidato" required>

	<label for="cargo_candidato">Cargo</label>
	<input list="cargo_candidato" name="cargo_candidato" required>
	<datalist id="cargo_candidato">
		<option value="Análise e Desenvolvimento">
		<option value="Ciência da Computação">
		<option value="Design">
		<option value="Jogos Digitais">
		<option value="Engenharia de Software">
	</datalist>

	<button type="submit">Enviar</button>
</form>