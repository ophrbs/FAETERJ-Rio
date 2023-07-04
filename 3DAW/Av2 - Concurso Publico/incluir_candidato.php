<h1>Incluir Candidato</h1>
	<form action="?page=salvar" method="POST">
		<input type="hidden" name="acao" value="incluir_candidato">
	
		<label for="nome_candidato">Nome</label>
		<input type="text" name="nome_candidato">
		
		<label for="sala_candidato">Sala de Prova</label>
		<input type="text" name="sala_candidato">
		
		<label for="cpf_candidato">CPF</label>
		<input type="text" name="cpf_candidato">
		
		<label for="identidade_candidato">Identidade</label>
		<input type="text" name="identidade_candidato">
		
		<label for="email_candidato">E-mail</label>
		<input type="mail" name="email_candidato">
		
		<label for="cargo_candidato">Cargo</label>
		<input type="text" name="cargo_candidato">
		
		<button type="submit">Enviar</button>
	</form>