<?php

class Humanos
{
  public const OLHOS = 2;
  public const BRACOS = 2;
  public const PERNAS = 2;

  public function mostrarConstante(): void
  {
    echo self::BRACOS . '<br>';
  }
}

$h1 = new Humanos;
echo $h1::OLHOS;