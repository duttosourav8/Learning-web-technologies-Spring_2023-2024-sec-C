<?php

$num = 1;
for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $num++ . " ";
  }
  echo "<br/>";
}
?>