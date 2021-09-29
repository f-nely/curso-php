<?php

// func_get_arg - retorna uma lista com os argumentos de uma função
// func_num_args - retorna o número de argumentos de uma função

function sum(int $n1, int $n2): int
{
  print_r(func_get_args());
  echo func_num_args();
  return $n1 + $n2;
}

echo '<pre>';
sum(4, 1);