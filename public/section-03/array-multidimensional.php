<?php

$cars = [
    'jetta' => [
      'marca' => 'Volkswagen',
      'cor' => 'Branco',
      'portas' => 4
    ],
    'S10' => [
      'marca' => 'Chevrolet',
      'cor' => 'Branco',
      'portas' => 2
    ],
];

//echo $cars['S10']['marca'];
var_dump($cars);
echo $cars['jetta']['marca'];