<?php

function alteraDados(string $nome, int $idade): array
{
  $nome = "Sr. $nome";
  $idade = "$idade anos";

  return [$nome, $idade];
}

echo '<pre>';
print_r(alteraDados('Taylor', 31));