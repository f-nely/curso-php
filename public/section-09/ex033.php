<?php

function apresentaPessoa(string $nome, int $idade): void
{
  echo "Olá eu sou o $nome e tenho $idade anos";
}

apresentaPessoa('Taylor', 32);