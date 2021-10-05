<?php

$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];

$diff = array_diff($arr1, $arr2);

echo '<pre>'; 
print_r($diff);

$diff2 = array_diff($arr2, $arr1);

echo '<pre>'; 
print_r($diff2);