<?php
function checkOddEven($number)
{
  if ($number % 2 == 0) {
    echo "$number is even.";
  } else {
    echo "$number is odd.";
  }
}


checkOddEven(4);
echo "";
checkOddEven(7);
?>