<h1>Alterar Sala de Candidato</h1>
<?php
$sql = "SELECT * FROM tabela_candidatos WHERE id_candidato=" . $_REQUEST["id_candidato"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST" class="form-incluir">
  <input type="hidden" name="acao" value="alterar_sala">
  <input type="hidden" name="id_candidato" value="<?php print $row->id_candidato; ?>">

  <div class="div-form-incluir">
    <label for="nome_candidato">Nome</label>
    <input disabled type="text" name="nome_candidato" class="input-alterar" value="<?php print $row->nome_candidato; ?>">
  </div>

  <div class="div-form-incluir">
    <label for="email_candidato">E-mail</label>
    <input disabled type="mail" name="email_candidato" class="input-alterar" value="<?php print $row->email_candidato; ?>">
  </div>

  <div class="div-form-incluir">
    <label for="cpf_candidato">CPF</label>
    <input disabled type="text" name="cpf_candidato" class="input-alterar" value="<?php print $row->cpf_candidato; ?>">
  </div>

  <div class="div-form-incluir">
    <label for="identidade_candidato">Identidade</label>
    <input disabled type="text" name="identidade_candidato" class="input-alterar" value="<?php print $row->identidade_candidato; ?>">
  </div>

  <div class="div-form-incluir">
    <label for="cargo_candidato">Cargo</label>
    <input disabled type="text" name="cargo_candidato" class="input-alterar" value="<?php print $row->cargo_candidato; ?>">
  </div>

  <div class="div-form-incluir">
    <label for="sala_candidato">Sala de Prova</label>
    <input type="text" name="sala_candidato" class="input-sala" value="<?php print $row->sala_candidato; ?>">
  </div>

  <button type="submit" class="btn-form">Enviar</button>
</form>