<?php

class Cachorro
{
  public function latir(): void
  {
    echo "Au au <br>";
  }

  public function andar(int $metros): void
  {
    echo "O cachorro andou $metros metros <br>";
  }
}

$dog1 = new Cachorro;
$dog1->andar(5);

$dog2 = new Cachorro;
$dog2->latir();