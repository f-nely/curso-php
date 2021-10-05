<?php

$arr = [1, 2, 4, 19, 234, 12, 34, 5, 12];

function sum($num1, $num2): int
{
  return $num1 + $num2;
}

$result = array_reduce($arr, 'sum');

echo "$result <br>";