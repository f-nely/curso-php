<?php

class Carro
{
  private int $portas;
  private string $cor, $marca, $modelo;

  public function __construct(int $portas, string $cor, string $marca, string $modelo)
  {
    $this->portas = $portas;
    $this->cor = $cor;
    $this->marca = $marca;
    $this->modelo = $modelo;
  }
}

$carro1 = new Carro(4, 'Preto', 'Jeep', 'Jeep Compass');

var_dump($carro1);