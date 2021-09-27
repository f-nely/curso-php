<?php

$arr = [11, false, 45, 'Jeep Compass', 'Jetta', 6.17, 'S10', 'Amarok', 2, 'Renegade'];

$j = 0;
$length =count($arr);

while($j < $length) {
  if(is_string($arr[$j])) {
    echo "$arr[$j] <br>";
  }
  $j++;
}