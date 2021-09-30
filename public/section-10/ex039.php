<?php

$cars = [
  'porta' => 100,
  'maçaneta' => 5,
  'motor' => 2000,
  'retorvidor' => 8
];

function func(array $arr): array
{
  $arrItensCaros = [];
  foreach ($arr as $item => $preco) {
    if($preco > 10) {
      array_push($arrItensCaros, $item);
    }
  }
  return $arrItensCaros;
}

echo '<pre>';
print_r(func($cars));