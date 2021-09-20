<?php

$x = 10;
$y = &$x;

echo $x . '<br>';
echo $y . '<br>';

$y = 100;

echo $x . '<br>';
echo $y . '<br>';