<?php

trait Objeto
{
  public function teste()
  {
    echo "Testando trait de objetos <br>";
  }
}

class Central
{
  use Objeto;
}

$x = new Central;

$x->teste();