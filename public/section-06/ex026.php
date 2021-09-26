<?php

$velocidade = 48;

if($velocidade < 40) {
  echo "Motorista está na velocidade correta <br>";
} else if ($velocidade === 40) {
  echo "Ateção! Tome cuidado. <br>";
} else {
  echo "Olha a multa! <br>";
}