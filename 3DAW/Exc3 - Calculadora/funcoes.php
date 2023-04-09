<!-- Básica -->
<?php
if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  $op = $_POST['operacao'];
  if ($op == '+')
    $resultado = $x + $y;
  else if ($op == '-')
    $resultado = $x - $y;
  else if ($op == '*')
    $resultado = $x * $y;
  else if ($op == '/')
    $resultado = $x / $y;
  else if ($op == '√')
    $resultado = sqrt($v1);

  echo "$x $op $y = $resultado";
}
?>

<!-- Trigonométrica -->
<?php
if ($_POST) {
  $x = $_POST['x'];
  $op = $_POST['operacao'];
  if ($op == 'seno')
    $resultado = sin($x);
  else if ($op == 'coseno')
    $resultado = cos($x);
  else if ($op == 'tangente')
    $resultado = tan($x);

  echo "$op de $x = $resultado";
}
?>

<!-- Potencia -->
<?php
if ($_POST) {
  $base = $_POST['base'];
  $exp = $_POST['expoente'];
  $resultado = pow($base, $exp);
  echo "$base ^ $exp = $resultado";
}
?>

<!-- Log -->
<?php
if ($_POST) {
  $valor = $_POST['valor'];
  $baselog = $_POST['baselog'];
  $resultado = log($valor, $baselog);
  echo "log de $valor na base $baselog = $resultado";
}
?>

<!-- Raiz -->
<?php
if ($_POST) {
  $$valor = $_POST['valor'];
  $resultado = sqrt($valor);
  echo "Raiz quadrada de $valor = $resultado";
}
?>