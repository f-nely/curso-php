<?php

$meiosDeTransportes = "carro - navio - helicóptero - barco - jangada";

$result = explode(' - ', $meiosDeTransportes);

echo "<pre>";
print_r($result);
//var_dump($result);

foreach($result as $r) {
  echo "$r <br>";
}