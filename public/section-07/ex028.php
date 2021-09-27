<?php

$a = 4;

while($a < 30) {

  echo "$a <br>";

  if($a === 24) {
    echo "Parando loop <br>";
    break;
  }

  $a += 2;

}