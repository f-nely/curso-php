<?php

class Carro 
{
  public string $marca;
  public string $cor;
  public float $velocidade_maxima;

  public function setVelocidadeMaxima(float $velociade_max): void
  {
    $this->velocidade_maxima = $velociade_max;
  }

  public function getVelocidadeMaxima(): float
  {
    return $this->velocidade_maxima;
  }
}

$car = new Carro;

$car->marca = 'BMW';
$car->cor = 'Preto';

$car->setVelocidadeMaxima(300.121);
echo $car->getVelocidadeMaxima();

var_dump($car);
