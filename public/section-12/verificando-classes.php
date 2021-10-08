<?php

class Funcionario
{
  public int $idade;
  public string $nome, $profissao;

  public function defineNome(string $nome): void
  {
    $this->nome = $nome;
  }
}

if(class_exists('Funcionario')) {
  echo "A classe existe <br>";
}

echo "<pre>";
print_r(get_class_vars('Funcionario'));

print_r(get_class_methods('Funcionario'));