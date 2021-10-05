<?php

$carros = [
  'marca' => 'BMW',
  'motor' => 2.4,
  'teto_solar' => true,
  'cambio' => 'manual',
  'portas' => 4
];

var_dump($carros);

// array_keys - chaves do array
$chaves = array_keys($carros);
echo "<pre>";
print_r($chaves);

// array_values - retorna os valores do array
$valores = array_values($carros);
echo "<pre>";
print_r($valores);