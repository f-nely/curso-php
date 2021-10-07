<?php

class Human
{
  public int $age = 29;

  public function speak(): void
  {
    echo "Hello World! <br>";
  }
}

class Programador extends Human
{

}

$h1 = new Human;
$h1->speak();

$p1 = new Programador;
$p1->speak();
