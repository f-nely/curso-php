<?php

$pessoa = [
  'nome' => 'Matheus',
  'idade' => 29,
  'profissao' => 'Programador'
];

foreach($pessoa as $key => $value) {
  echo "$key: $value <br>";
}