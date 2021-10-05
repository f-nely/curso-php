<?php

$arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

echo "<pre>";
print_r($arr);

sort($arr);

print_r($arr);

$arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

rsort($arr2);

print_r($arr2);

$names = ['Taylor', 'Diana', 'James', 'Sophie'];

sort($names);

print_r($names);