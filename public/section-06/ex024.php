<?php

$variaveis = ['nome', 14, false, 17.45];
$lenght = count($variaveis);

for($i = 0; $i < $lenght; $i++) {
  if(is_int($variaveis[$i])) {
    echo "é inteiro <br>";
  } else {
    echo "não é inteiro <br>";
  }
}