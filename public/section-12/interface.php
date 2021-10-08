<?php

interface Caracteristica
{
  public function falar(): void;
}

class Pessoa implements Caracteristica
{
  public function falar(): void
  {
    echo "Pessoa falando <br>";
  }
}

$pessoa = new Pessoa;
$pessoa->falar();