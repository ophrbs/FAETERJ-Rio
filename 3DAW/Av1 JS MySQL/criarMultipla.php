<h1>Criar Pergunta de Multipla Escolha</h1>
<form action="?page=salvar" method="POST" class="formulario">
  <input type="hidden" name="acao" value="cadastrar_multipla">

  <label for="pergunta">Pergunta:</label>
  <input type="text" name="pergunta_multipla" size="50" required>

  <div class="div-opcoes">
    <label for="resposta" class="label-opcao1">Opção 1:</label>
    <input type="text" name="opcao1_multipla" class="input-opcao1" required>

    <label for="resposta" class="label-opcao2">Opção 2:</label>
    <input type="text" name="opcao2_multipla" class="input-opcao2" required>

    <label for="resposta" class="label-opcao3">Opção 3:</label>
    <input type="text" name="opcao3_multipla" class="input-opcao3">
  </div>

  <label for="resposta">Resposta:</label>
  <input type="text" name="resposta_multipla" size="50" required>

  <button type="submit" class="botao">Enviar</button>
</form>