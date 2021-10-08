<?php

$pessoa = new class()
{
  private string $nome = 'Taylor';

  public function dizerNome()
  {
    echo "Olá meu nome é {$this->nome} <br>";
  }
};

echo $pessoa->dizerNome();

var_dump($pessoa);