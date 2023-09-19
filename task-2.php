<?php

//Skip Multiple of 5

for ($i = 1; $i <= 50; $i++) {

  if ($i % 5 == 0) {
    continue;
  }
  echo $i . " ";
}