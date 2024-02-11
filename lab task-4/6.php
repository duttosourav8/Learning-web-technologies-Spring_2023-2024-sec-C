<?php

function searchElement($array, $element)
{

  foreach ($array as $value) {

    if ($value === $element) {

      return true;
    }
  }

  return false;
}


$numbers = array(2, 4, 6, 8, 10);


$searchElement = 6;


if (searchElement($numbers, $searchElement)) {
  echo "$searchElement is found in the array.";
} else {
  echo "$searchElement is not found in the array.";
}
?>