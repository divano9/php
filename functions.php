<?php


function getSum($num1, $num2){
  echo $num1 + $num2;
}

getSum(1, 2);

echo "<br />";

function getDif($num1,$num2){
  $num3 = $num1 - $num2;
  if ($num1 > $num2) {
    echo $num3;
  }else {
  echo "nije moguce izracunati";
  }
}

getDif(2,3);

echo "<br />";

function getPow($num1,$num2){
  return $num1 * $num2;
}

$num5 = getPow(5,2);

echo $num5;

echo "<br />";









 ?>
