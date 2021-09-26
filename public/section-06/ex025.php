<?php

$numeros = [2, 4, 7, 'g', 'd', 'o'];

$length = count($numeros);
for($i = 0; $i < $length; $i++) {
  //echo $numeros[$i] . '<br>';
  if(is_numeric($numeros[$i])) {
    $v = $numeros[$i] * 2;
    if($v > 100) {
      echo "Maior que 100 <br>";
    }
  }
}