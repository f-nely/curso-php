<?php

class Car
{
  public int $rodas = 4;
  public int $aro = 20;

  public function ligar(): void
  {
    echo "Vrummm <br>";
  }
}

$ferrari = new Car;

echo $ferrari->rodas;
echo '<br>';
echo $ferrari->aro;
echo '<br>';
$ferrari->ligar();