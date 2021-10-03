<?php

$arr = [
  [1, 2, 3],
  [2, 4, 6]
];

echo "<pre>";
print_r($arr);
echo "<br>";

echo $arr[0][0] . '<br>';
echo $arr[0][1] . '<br>';
echo $arr[0][2] . '<br><br>';

echo $arr[1][0] . '<br>';
echo $arr[1][1] . '<br>';
echo $arr[1][2] . '<br><br>';

echo count($arr) . '<br>';
echo count($arr[0]) . '<br>';
echo count($arr[1]) . '<br>';