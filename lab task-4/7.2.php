<?php

$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $letter++ . " ";
  }
  echo "<br/>";
}
?>