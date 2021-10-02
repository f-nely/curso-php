<?php

$str = "Testando o resto da string, pra ver de dá certo";

$resto = strstr($str, 'resto');

echo "$resto <br>";

$resto2 = strstr($str, 'string');

echo "$resto2 <br>";

if(strstr($str, '.NET') === false) {
  echo "Não encontramos a string! <br>";
}