<?php

$person = [
  'name' => 'James Holden',
  'age' => 29
];

if(array_key_exists('name', $person)) {
  echo $person['name'] . '<br>';
} else {
  echo "Value not found";
}

if(array_key_exists('role', $person)) {
  echo $person['role'] . '<br>';
} else {
  echo "Value not found";
}