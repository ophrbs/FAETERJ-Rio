<h1>Alterar Pergunta de Multipla Escolha</h1>
<?php
$sql = "SELECT * FROM tabela_multipla WHERE id_multipla=" . $_REQUEST["id_multipla"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST" class="formulario">
  <input type="hidden" name="acao" value="editar_multipla">
  <input type="hidden" name="id_multipla" value="<?php print $row->id_multipla; ?>">
  <label for="pergunta">Pergunta:</label>
  <input type="text" name="pergunta_multipla" size="50" value="<?php print $row->pergunta_multipla; ?>" required>

  <div class="div-opcoes">
    <label for="resposta" class="label-opcao1">Opção 1:</label>
    <input type="text" name="opcao1_multipla" class="input-opcao1" value="<?php print $row->opcao1_multipla; ?>" required>

    <label for="resposta" class="label-opcao2">Opção 2:</label>
    <input type="text" name="opcao2_multipla" class="input-opcao2" value="<?php print $row->opcao2_multipla; ?>" required>

    <label for="resposta" class="label-opcao3">Opção 3:</label>
    <input type="text" name="opcao3_multipla" class="input-opcao3" value="<?php print $row->opcao3_multipla; ?>">
  </div>

  <label for="resposta">Resposta:</label>
  <input type="text" name="resposta_multipla" size="50" value="<?php print $row->resposta_multipla; ?>" required>

  <button type="submit" class="botao">Enviar</button>
</form>