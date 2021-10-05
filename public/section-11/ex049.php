<?php

$raca = 'vira lata';
$cor = 'preto e branco';
$nome = 'pretinha';
$idade = 3;
$peso = 14;

$cachorros = compact('raca', 'cor', 'nome', 'idade', 'peso');

var_dump($cachorros);

foreach($cachorros as $key => $value) {
  echo "$key: $value <br>";
}