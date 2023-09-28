<!DOCTYPE html>
<html>
<body>

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

echo product(3, 2);
echo quotient(10, 2);
echo remainder(10, 3);
?>  

</body>
</html>
