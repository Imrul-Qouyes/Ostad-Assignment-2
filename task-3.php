<?php

//Break on Condition

$num1 = 0;
$num2 = 1;
$count = 0;


while ($count < 10) {

  echo ' ' . $num1;
  $num3 = $num2 + $num1;
  $num1 = $num2;
  $num2 = $num3;
  $count = $count + 1;

  if ($num1 > 100) {
    break;
  }

}