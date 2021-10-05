<?php

$arr = range(1, 20);

echo "<pre>";
print_r($arr);
print_r(array_chunk($arr, 4));

$arrays = array_chunk($arr, 10);
echo "<pre>";
print_r($arrays);
print_r($arrays[0]);