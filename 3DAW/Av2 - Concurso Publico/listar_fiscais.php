<?php
$sql = "SELECT * FROM tabela_fiscais ORDER BY sala_fiscal";
$res = $conn->query($sql);
$qtd = $res->num_rows;

print "<h1>Tabela de Fiscais por Sala</h1>";
if ($qtd > 0) {
  print "<table class='tabela tabela-fiscal'>";
  print "<tr class='tabela-titulo'>";
  print "<th>Nome</th>";
  print "<th>CPF</th>";
  print "<th>Sala</th>";
  print "</tr>";
  while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->nome_fiscal . "</td>";
    print "<td>" . $row->cpf_fiscal . "</td>";
    print "<td>" . $row->sala_fiscal . "</td>";
    // print "<td><button onclick=\"location.href='?page=alterar_sala&id=" . $row->id_fiscal . "';\">Alterar Sala</button>";
    print "</tr>";
  }
  print "</table>";
} else {
  print "<p>Não há candidatos registrados</p>";
}
?>