<?php

$str = "Testando encontrando palavra teste, em uma string que tem teste";

// strrpos - encontrando a última ocorrência
$palavra = strrpos($str, 'teste');
echo "$palavra <br>";

$p = substr($str, strpos($str, 'teste'), 5);

echo "$p <br>";