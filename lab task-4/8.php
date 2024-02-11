<?php

$array = array(
  array(1, 2, 3),
  array('A'),
  array(1, 2, 'B', 'C'),
  array(1, 'D', 'E', 'F'),
  array(1, 2, 3, 12, 1),
  array('A', 'B', 'C', 'D', 'E', 'F')
);


function print2DArray($array)
{
  foreach ($array as $row) {
    foreach ($row as $element) {
      echo $element . " ";
    }
    echo "<br/>";
  }
  echo "<br/>";
}


print2DArray($array);


for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $j . " ";
  }
  echo "<br/>";
}
echo "<br/>";


$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $letter++ . " ";
  }
  echo "<br/>";
}
echo "<br/>";


$number = 1;
foreach ($array as $row) {
  foreach ($row as $element) {
    echo $element . " ";
  }
  echo "<br/>";
}
?>