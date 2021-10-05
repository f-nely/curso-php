<?php

$marca = 'BMW';
$motor = 3.0;
$teto_solar = true;
$portas = 4;

$carro = compact('marca', 'motor', 'teto_solar', 'portas');

var_dump($carro);