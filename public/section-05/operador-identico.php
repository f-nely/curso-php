<?php

if(5 == '5') {
  echo "5 igual a 5 <br>";
  //echo gettype('5');
}

if(5 === 5) {
  echo "5 igual a 5 <br>";
}

$a = 4;
$b = 4;
$c = '4';

if($a === $b) {
  echo "A igual a  B <br>";
}

if($a === $c) {
  echo "A igual a  C <br>";
}

echo $a === $c ? "A igual a  C <br>" : "A não é igual a  C <br>";