<?php

$arr = [];

echo "<pre>";
print_r($arr);
echo "<br>";

// adicionando valores
$arr[0] = 10;
$arr[1] = 15;
$arr[5] = 25;

// modificando valores
$arr[1] += 55;

echo "<pre>";
print_r($arr);
echo "<br>";

$arrAssoc = [];

$arrAssoc['carro'] = 'BMW';

echo "<pre>";
print_r($arrAssoc);
echo "<br>";
