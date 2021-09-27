<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$length = count($arr);

for($i = 0; $i < $length; $i++) {
  $numAtual = $arr[$i];
  if($numAtual % 2 === 0) {
    echo "$numAtual <br>";
  }
}