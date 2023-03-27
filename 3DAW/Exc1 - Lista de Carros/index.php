<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Carros 3DAW</title>
</head>

<body>
  <?php
  echo "<h1>Lista de Carros</h1>";

  $listaCarros = array("Fusca", "Ferrari", "Gol", "Opala");

  for ($i = 0; $i < count($listaCarros); $i++) {
    echo "<p>Carro ", $i + 1, ": $listaCarros[$i]</p>";
  }
  ?>
</body>

</html>