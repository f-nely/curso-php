<?php

$arr = [
  'Steve' => 42,
  'James' => 32,
  'Diana' => 29
];

asort($arr);

echo '<pre>';
print_r($arr);

$arr2 = [
  'Amelia' => 30,
  'Steve' => 42,
  'James' => 32,
  'Diana' => 29
];

arsort($arr2);

print_r($arr2);

// ksort - ordena array pela chave
ksort($arr2);

print_r($arr2);

// krsort - ordena array pela chave decrescente
krsort($arr2);

print_r($arr2);
