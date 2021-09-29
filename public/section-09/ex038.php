<?php

function arrayToString(array $arr)
{
  $result = implode(', ', $arr);
  return $result;
}

$myArray = ['Café', 'Leite', 'Arroz', 'Sabão'];

echo arrayToString($myArray);