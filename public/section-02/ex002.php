<?php

// modelo do carro
$car = 'Jeep Compass'; 

// capacidade do tanque
$tanque = 55;

// quantidade de ocupantes
$ocupantes = 5;

$cars = [
  'modelo' => 'Jeep Compass',
  'tanque' => 55,
  'ocupantes' => 5,
];

var_dump($cars);
echo $cars['modelo'] . '<br>';
echo $cars['tanque'] . '<br>';

foreach($cars as $car1) {
  echo $car1 . '<br>';
}

foreach ($cars as $key => $value) {
  echo "$key = $value <br>" ;
}