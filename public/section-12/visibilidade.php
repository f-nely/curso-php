<?php

class Car
{
  public int $rodas = 4;
  public string $vidro = "Sem película";
}

class Mecanico
{
  public function alterarRodas(Car $car): void
  {
    $car->rodas = 10;
  }

  public function colocarPelicula(Car $car, string $pelicula): void
  {
    $car->vidro = $pelicula;
  }
}

$carro = new Car;
echo $carro->rodas . '<br>';

$mecanico = new Mecanico;
$mecanico->alterarRodas($carro);
echo $carro->rodas . '<br>';
$mecanico->colocarPelicula($carro, "G20");
echo $carro->vidro . '<br>';


