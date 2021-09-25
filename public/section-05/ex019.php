<?php

$a = (int) 'testando';
echo gettype($a) . '<br>';
echo $a .'<br>';

$b = (int) 12.9;
echo gettype($b) . '<br>';
echo $b .'<br>';

$c = (int) true;
echo gettype($c) . '<br>';
echo $c .'<br>';

$d = (int) [1, 2, 3];
echo gettype($d) . '<br>';
echo $d .'<br>';


