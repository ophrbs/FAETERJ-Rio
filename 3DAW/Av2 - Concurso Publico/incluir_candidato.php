<h1>Incluir Candidato</h1>
<form action="?page=salvar" method="POST" class="form-incluir">
	<input type="hidden" name="acao" value="incluir_candidato">

	<div class="div-form-incluir">
		<label for="nome_candidato">Nome</label>
		<input type="text" name="nome_candidato" required>
	</div>

	<div class="div-form-incluir">
		<label for="email_candidato">E-mail</label>
		<input type="email" placeholder="example@email.com" name="email_candidato" required>
	</div>

	<div class="div-form-incluir">
		<label for="cpf_candidato">CPF</label>
		<input type="text" placeholder="11 digitos" name="cpf_candidato" required>
	</div>

	<div class="div-form-incluir">
		<label for="identidade_candidato">Identidade</label>
		<input type="text" placeholder="12 digitos" name="identidade_candidato" required>
	</div>

	<div class="div-form-incluir">
		<label for="cargo_candidato">Cargo</label>
		<input list="cargo_candidato" name="cargo_candidato" required>
		<datalist id="cargo_candidato">
			<option value="Análise e Desenvolvimento">
			<option value="Ciência da Computação">
			<option value="Design">
			<option value="Jogos Digitais">
			<option value="Engenharia de Software">
		</datalist>
	</div>

	<div class="div-form-incluir">
		<label for="sala_candidato">Sala de Prova</label>
		<input type="text" placeholder="8 digitos" name="sala_candidato" required>
	</div>

	<button type="submit" class="btn-form">Enviar</button>
</form>