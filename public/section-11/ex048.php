<?php

$arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

echo "<pre>";
print_r($arr);

$removidos = array_splice($arr, 2, 2);
echo "<pre>";
print_r($arr);
print_r($removidos);