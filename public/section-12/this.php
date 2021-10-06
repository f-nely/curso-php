<?php

class Animal
{
  public string $nome;

  public function escolherNome(string $nome): void
  {
    $this->nome = $nome;
  }
}

$n1 = new Animal;

$n1->escolherNome('Frida');

echo "O nome do animal é: {$n1->nome}";