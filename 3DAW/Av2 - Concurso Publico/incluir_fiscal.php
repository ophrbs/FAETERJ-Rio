<h1>Incluir Fiscal</h1>
	<form action="?page=salvar" method="POST">
		<input type="hidden" name="acao" value="incluir_fiscal">
	
		<label for="nome_fiscal">Nome</label>
		<input type="text" name="nome_fiscal">
		
		<label for="sala_fiscal">Sala de Prova</label>
		<input type="text" name="sala_fiscal">
		
		<label for="cpf_fiscal">CPF</label>
		<input type="text" name="cpf_fiscal">
		
		<button type="submit">Enviar</button>
	</form>