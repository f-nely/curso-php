<?php

$ages = [
  'Taylor' => 18,
  'James' => 21,
  'Bob' => 12
];

foreach ($ages as $key => $value) {
  //echo $value . '<br>';
  if($value >= 18) {
    echo "$key é maior de idade. Idade igual a $value. <br>";
  } else {
    echo "$key é menor de idade. Idade igual a $value. <br>";
  }
}
