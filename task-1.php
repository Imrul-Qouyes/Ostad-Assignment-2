<?php

//Printing Even Numbers Using for Loop

function printEvenNumbers($start, $end, $step)
{
  for ($i = $start; $i <= $end; $i = $i + $step) {
    if ($i % 2 != 0) {
      echo ($i + 1) . " ";
    }
  }
}

printEvenNumbers(1, 20, 2);



//Printing Even Numbers Using while Loop

/*
function printEvenNumbers($start, $end, $step)
{
  while ($start <= $end) {
    if ($start % 2 != 0) {
      echo ($start + 1) . " ";
      $start = $start + $step;
    }
  }
}

printEvenNumbers(1, 20, 2);
*/



//Printing Even Numbers Using do-while Loop

/*
function printEvenNumbers($start, $end, $step)
{

  do {
    if ($start % 2 != 0) {
      echo ($start + 1) . " ";
      $start = $start + $step;
    }
  } while ($start <= $end);

}

printEvenNumbers(1, 20, 2);
*/