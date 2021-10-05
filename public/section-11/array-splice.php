<?php

/**
 * Resgatar elementos de um array
 * Remover elementos
 */

$arr = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r($arr);

$removidos = array_splice($arr, 1, 2);
echo "<pre>";
print_r($arr);
print_r($removidos);

$arr2 = [1, 2, 3, 4, 5, 6];
$removidos2 = array_splice($arr2, 3);
echo "<pre>";
print_r($arr2);
print_r($removidos2);

$arr3 = [1, 2, 3, 4, 5, 6];
$removidos3 = array_splice($arr3, 1, -1);
echo "<pre>";
print_r($arr3);
print_r($removidos3);