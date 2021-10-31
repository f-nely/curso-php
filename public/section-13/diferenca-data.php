<?php

date_default_timezone_set('America/Sao_Paulo');

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2001, 10, 15);

echo '<pre>';

print_r($dataA);
echo '<br>';
print_r($dataB);
echo '<br>';

$diferenca = $dataA->diff($dataB);

print_r($diferenca);
echo '<br>';

echo $diferenca->format('%a days');
echo '<br>';