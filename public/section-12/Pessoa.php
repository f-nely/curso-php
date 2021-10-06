<?php

class Pessoa
{
  public function falar(): void
  {
    echo "Olá, eu sou um objeto!";
  }
}

$p1 = new Pessoa;
$p1->falar();