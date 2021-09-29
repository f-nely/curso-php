<?php

function createArray(array $arr)
{
  $newArray = [];
  for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] > 7) {
      array_push($newArray, $arr[$i]);
    }
  }
  return $newArray;
}

$myArray = [2, 4, 11, 9, 13];
echo '<pre>';
print_r(createArray($myArray));