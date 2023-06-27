<h1>Alterar Pergunta de Texto</h1>
<?php
$sql = "SELECT * FROM tabela_texto WHERE id_texto=" . $_REQUEST["id_texto"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST" class="formulario">
  <input type="hidden" name="acao" value="editar_texto">
  <input type="hidden" name="id_texto" value="<?php print $row->id_texto; ?>">
  <label for="pergunta">Pergunta:</label>
  <input type="text" name="pergunta_texto" size="50" value="<?php print $row->pergunta_texto; ?>" required>

  <label for="resposta">Resposta:</label>
  <input type="text" name="resposta_texto" size="50" value="<?php print $row->resposta_texto; ?>" required>

  <button type="submit" class="botao">Enviar</button>
</form>