<?php

$arr = [10 , 20, 30, 40, 50, 60, 70, 80, 90, 100];

$length = count($arr);

$j = 0;

while($j < $length) {

  $numAtual = $arr[$j];
  
  if($numAtual  == 30 || $numAtual == 40) {
    $j++;
    continue;
  }

  echo "$numAtual  <br>";
  $j++;

}