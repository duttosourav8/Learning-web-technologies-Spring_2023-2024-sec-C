<?php
function findLargest($num1, $num2, $num3)
{
  $largest = $num1;

  if ($num2 > $largest) {
    $largest = $num2;
  }

  if ($num3 > $largest) {
    $largest = $num3;
  }

  return $largest;
}


$num1 = 10;
$num2 = 25;
$num3 = 15;
$largestNumber = findLargest($num1, $num2, $num3);
echo "The largest number among $num1, $num2, and $num3 is: $largestNumber";
?>