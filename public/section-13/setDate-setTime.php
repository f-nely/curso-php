<?php

date_default_timezone_set('America/Sao_Paulo');

$today = new DateTime();

echo "<pre>";
print_r($today);
echo "<br>";

$today->setDate(1999, 12, 01);

print_r($today);
echo "<br>";

echo $today->format('d/m/Y') . '<br>';