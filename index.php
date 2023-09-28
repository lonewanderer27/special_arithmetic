<?php

function product(int $int1, int $int2): int
{
  $result = 0;
  for ($i = 0; $i < $int2; $i++) {
    $result += $int1;
  }
  return $result;
}

function quotient(int $int1, int $int2): int
{
  $result = 0;
  while ($int1 >= $int2) {
    $int1 -= $int2;
    $result += 1;
  }
  return $result;
}

function remainder(int $int1, int $int2): int
{
  $result = $int1;
  while ($result >= $int2) {
    $result -= $int2;
  }
  return $result;
}

$numberInput1 = isset($_GET["numberInput1"]) ? $_GET["numberInput1"] : 20;
$numberInput2 = isset($_GET["numberInput2"]) ? $_GET["numberInput2"] : 5;
$p = product($numberInput1, $numberInput2);
$q = quotient($numberInput1, $numberInput2);
$r = remainder($numberInput1, $numberInput2);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Special Arithmetic</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@materializecss/materialize@2.0.2-alpha/dist/css/materialize.min.css">
</head>
<body>
  <form method="get" class="col s12" style="padding: 10px">
    <div class="row">
      <div class="input-field outlined">
        <input type="number" name="numberInput1" value='<?php echo $numberInput1 ?>' min="1">
      </div>
      <div class="input-field outlined">
        <input type="number" name="numberInput2" value='<?php echo $numberInput2 ?>' min="1">
      </div>
    </div>
    <div class="row">
      <p>
        <span style="font-weight: bold">Product: </span><span><?php echo $p; ?></span>
        <span style="font-weight: bold">Quotient: </span><span><?php echo $q; ?></span><br/>
        <span style="font-weight: bold">Remainder: </span><span><?php echo $r; ?></span><br/>
      </p>
    </div>
    <button type="submit" class="btn">COMPUTE</button>
  </form>
</body>
</html>
