<?php

//Fibonacci Series printing using a Function
function printFibonacci($number)
{

  $num1 = 0;
  $num2 = 1;
  $count = 0;

  for ($i = 0; $i < $number; $i++) {
    echo ' ' . $num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $count = $count + 1;

  }
}

printFibonacci(15);