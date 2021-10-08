<?php

class ContaCorrente
{
  private int $numero;

  public function defineNumero(int $numero): void
  {
    $this->numero = $numero;
  }
}

$conta_corrente = new ContaCorrente;

if(is_object($conta_corrente)) {
  echo "É um objeto da classe contaCorrente <br>";
}

echo get_class($conta_corrente) . '<br>';

if(method_exists($conta_corrente, 'defineNumero')) {
  echo "Método defineNumero existe <br>";
}