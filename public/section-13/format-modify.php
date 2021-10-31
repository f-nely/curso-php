<?php

date_default_timezone_set('America/Sao_Paulo');

// data atual
$hoje = new DateTime();

echo $hoje->format('d/m/y') . '<br>';

echo $hoje->format('D - M - Y') . '<br>';

echo $hoje->format('l, F, Y') . '<br>';

// data + 5 dias
$hoje->modify('+5 days');

echo $hoje->format('d-m-Y H:i:s') . '<br>';

// data + 2 dias
$hoje->modify('+2 days');

echo $hoje->format('d-m-Y H:i:s');