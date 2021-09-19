<?php

$person = [
  'name' => 'Taylor', 
  'age' => 21
];

echo $person['name'] . '<br>';
echo $person['age'] . '<br>';
 
echo $person['age'] >= 18 ? 'maior de idade: ' : 'menor de idade: ';