<?php

$atual = new DateTime();
$especifica = new DateTime('1990-01-22');
$atualPlusOneMonth = new DateTime('+1 month');

echo "<pre>";

print_r($atual);
print_r($especifica);
print_r($atualPlusOneMonth);
