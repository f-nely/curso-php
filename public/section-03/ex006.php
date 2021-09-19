<?php

$carros = [
    'marca' => 'BMW',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => false
];

foreach($carros as $carro) {
    echo "$carro ";
}