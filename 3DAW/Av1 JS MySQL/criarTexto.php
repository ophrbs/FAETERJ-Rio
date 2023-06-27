<h1>Criar Pergunta de Texto</h1>
<form action="?page=salvar" method="POST" class="formulario">
  <input type="hidden" name="acao" value="cadastrar_texto">

  <label for="pergunta">Pergunta:</label>
  <input type="text" name="pergunta_texto" size="50" required>

  <label for="resposta">Resposta:</label>
  <input type="text" name="resposta_texto" size="50" required>

  <button type="submit" class="botao">Enviar</button>
</form>