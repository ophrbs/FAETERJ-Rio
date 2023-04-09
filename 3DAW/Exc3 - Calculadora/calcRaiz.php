<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DAW Calculdora</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="calculadora">
    <h1>Calculadora 3DAW</h1>

    <!-- Operações Básicas -->
    <div class="part1">
      <form action="calcBasica.php" method="post">
        <h3>Operações básicas:</h3>
        Valor 1: <input name="x" type="text" size="2" required>
        Valor 2: <input name="y" type="text" size="2" required>
        Operação:
        <select name="operacao">
          <option value="+">Somar</option>
          <option value="-">Subtrair</option>
          <option value="*">Multiplcar</option>
          <option value="/">Dividir</option>
        </select>
        <input type="submit" value="RESULTADO">
      </form>
    </div>

    <!-- Razões trigonométricas -->
    <div class="part2">
      <form action="calcTrigonometrica.php" method="post">
        <h3>Razões trigonométricas:</h3>
        Valor: <input name="x" type="text" size="2" required>
        Operação:
        <select name="operacao">
          <option value="seno">Seno</option>
          <option value="coseno">Coseno</option>
          <option value="tangente">Tangente</option>
        </select>
        <input type="submit" value="RESULTADO">
      </form>
    </div>

    <!-- Operações adicionais -->
    <div class="part3">
      <h3>Operações adicionais</h3>

      <!-- Potenciação -->
      <form action="calcPotencia.php" method="post">
        <h4>Potenciação:</h4>
        Base: <input name="base" type="text" size="2">
        Expoente: <input name="expoente" type="text" size="2">
        <input type="submit" value="RESULTADO">
      </form>

      <!-- Logaritmo -->
      <form action="calcLog.php" method="post">
        <h4>Logaritmo:</h4>
        Valor: <input name="valor" type="text" size="2">
        Base: <input name="baselog" type="text" size="2">
        <input type="submit" value="RESULTADO">
      </form>

      <form action="calcRaiz.php" method="post">
        <!-- Raiz quadrada -->
        <h4>Raiz quadrada:</h4>
        Valor: <input name="valor" type="text" size="2">
        <input type="submit" value="RESULTADO">
      </form>
      <br>
      <?php
      if ($_POST) {
        $valor = $_POST['valor'];
        $resultado = sqrt($valor);
        echo "Raiz quadrada de $valor = $resultado";
      }
      ?>
    </div>
  </div>
</body>

</html>