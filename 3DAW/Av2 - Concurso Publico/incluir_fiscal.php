<h1>Criar Sala e Incluir Fiscais</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="incluir_fiscal">

	<div class="form-fiscal">
		<h2>Sala</h2>
		<input type="text" placeholder="8 digitos" name="sala_fiscal" required>
	</div>

	<div class="form-fiscal">
		<h2>Fiscal 1</h2>
		<label for="nome_fiscal">Nome</label>
		<input type="text" name="nome_fiscal1" required>

		<label for="cpf_fiscal">CPF</label>
		<input type="text" placeholder="11 digitos" name="cpf_fiscal1" required>
	</div>

	<div class="form-fiscal">
		<h2>Fiscal 2</h2>
		<label for="nome_fiscal">Nome</label>
		<input type="text" name="nome_fiscal2" required>

		<label for="cpf_fiscal">CPF</label>
		<input type="text" placeholder="11 digitos" name="cpf_fiscal2" required>
	</div>

	<button type="submit" class="btn-form form-fiscal-btn">Enviar</button>
</form>