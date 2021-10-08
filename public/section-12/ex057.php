<?php

class Cachorro
{
  private string $nome, $raca;
  private int $idade, $peso;

  public function __construct(string $nome, string $raca, int $idade, int $peso)
  {
    $this->nome = $nome;
    $this->raca = $raca;
    $this->idade = $idade;
    $this->peso = $peso;
  }

  public function showCachorro()
  {
    echo "Nome: {$this->nome} <br> Raça: {$this->raca} <br> Idade: {$this->idade} <br> Peso: {$this->peso} <br>";
  }
}

$cachorro = new Cachorro('Bill', 'Vira lata', 3, 14);
$cachorro->showCachorro();