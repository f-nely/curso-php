<?php

$arr = [7, 11, 4];

echo count($arr) . '<br>';

$arr2 = range(5, 105, 5);
echo "<pre>";
print_r($arr2);
echo "<br>";

echo count($arr2) . '<br>';

$arr3 = [
  'name' => 'Rasmus Lerdorf',
  'age' => 53,
  'occupation' => 'Programmer'
];

echo "<pre>";
print_r($arr3);
echo "<br>";

echo count($arr3) . '<br>';
