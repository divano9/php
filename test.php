<?php



$firstname = "Dusan";
$lastname = "Ivanovic";
$number = 3;
$strnumber = "1";

echo $firstname;
echo $lastname;
echo $number;

echo "<br />";

echo $firstname . " " . $lastname;

//komentar

echo "<br />";

if($number === $strnumber){
  echo "jeste jednako";
}else {
  echo "nije jednako";
}

echo "<br />";

if($number == 1){
  echo "vrednost je 1";
}elseif($number == 2) {
  echo "vrednost je 2";
}else {
  echo "nije odredjena vrednost";
}

$arr = array(1, 2, 3, "pera");
$arr2 = array(1 => "Mile", 2 => "Pera", "index" => "Zika" );

echo "<br />";
echo "<br />";

for ($i=0; $i < 5; $i++) {
  echo $i;
  echo "<br />";
}

echo "<br />";

echo count($arr);

echo "<br />";
echo "<br />";


for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i];
  echo "<br />";
}

echo "<br />";


foreach ($arr2 as $key => $value) {
  echo $key . " " . $value;
  echo "<br />";
}
