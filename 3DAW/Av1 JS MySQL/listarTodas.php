<?php
$sql = "SELECT * FROM tabela_texto";
$res = $conn->query($sql);
$qtd = $res->num_rows;

print "<h1>Perguntas de Texto</h1>";
if ($qtd > 0) {
  print "<table>";
  print "<tr>";
  print "<th>ID</th>";
  print "<th>Pergunta</th>";
  print "<th>Resposta</th>";
  print "<th style='width:120px;'>Ações</th>";
  print "</tr>";
  while ($row = $res->fetch_object()) {
    print "<tr style='text-align:center;'>";
    print "<td>" . $row->id_texto . "</td>";
    print "<td>" . $row->pergunta_texto . "</td>";
    print "<td>" . $row->resposta_texto . "</td>";
    print "<td><button onclick=\"location.href='?page=editar_texto&id_texto=" . $row->id_texto . "';\" >Editar</button><button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir_texto&id_texto=" . $row->id_texto . "';} else{false;} \">Excluir</button></td>";
    print "<tr>";
  }
  print "</table>";
} else {
  print "<p>A lista está vazia</p>";
}
?>
<?php
$sql = "SELECT * FROM tabela_multipla";
$res = $conn->query($sql);
$qtd = $res->num_rows;

print "<h1>Perguntas de Multipla Escolha</h1>";
if ($qtd > 0) {
  print "<table>";
  print "<tr>";
  print "<th>ID</th>";
  print "<th>Pergunta</th>";
  print "<th>Opção 1</th>";
  print "<th>Opção 2</th>";
  print "<th>Opção 3</th>";
  print "<th>Resposta</th>";
  print "<th style='width:120px;'>Ações</th>";
  print "</tr>";
  while ($row = $res->fetch_object()) {
    print "<tr style='text-align:center;'>";
    print "<td>" . $row->id_multipla . "</td>";
    print "<td>" . $row->pergunta_multipla . "</td>";
    print "<td>" . $row->opcao1_multipla . "</td>";
    print "<td>" . $row->opcao2_multipla . "</td>";
    print "<td>" . $row->opcao3_multipla . "</td>";
    print "<td>" . $row->resposta_multipla . "</td>";
    print "<td><button onclick=\"location.href='?page=editar_multipla&id_multipla=" . $row->id_multipla . "';\">Editar</button><button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir_multipla&id_multipla=" . $row->id_multipla . "';} else{false;} \">Excluir</button></td>";
    print "<tr>";
  }
  print "</table>";
} else {
  print "<p>A lista está vazia</p>";
}
?>