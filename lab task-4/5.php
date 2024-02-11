<?php

function printOddNumbers()
{
  for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
      echo $i . " ";
    }
  }
}


printOddNumbers();
?>