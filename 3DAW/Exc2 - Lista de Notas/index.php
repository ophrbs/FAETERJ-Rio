<?php
$nomes = array("Leandro", "Andre", "Leonardo", "Pedro", "Vitor");
$notas = array("8.2", "9", "4.2", "5", "10");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DAW - Lista de Notas</title>
  <style>
    table {
      border: 1px solid black;
      text-align: center;
    }

    tr,
    th,
    td {
      border: 1px solid black;
      padding: 2px;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Nome</th>
      <th>Nota</th>
      <th>Status</th>
    </tr>
    <?php
    for ($i = 0; $i < count($nomes); $i++) {
      echo "<tr>";
      echo "<td>", $nomes[$i], "</td>";
      echo "<td>", $notas[$i], "</td>";
      if ($notas[$i] >= 8) {
        echo '<td style="color:green;">Aprovado</td>';
      } else {
        echo '<td style="color:red;">Reprovado</td>';
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>