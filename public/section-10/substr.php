<?php

$str = "Esta é a minha string";

$minha = substr($str, 10, 5);

echo "$str <br>";
echo "$minha <br>";

$str2 = "Taylor Otwell";
$result = substr($str2, 0, 6);
$r = substr($str2, -7);
$r2 = substr($str2, 7);

echo "$result <br>";
echo "$r <br>";
echo "$r2 <br>";