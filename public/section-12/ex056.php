<?php

class Humano
{
  public int $maos = 2;
  public int $pernas = 2;

  public function falar(): void
  {
    echo "Olá, eu sou um humano! <br>";
  }
}

class Professor extends Humano
{
  public string $disciplina = "Matemática";

  public function estaLecionando()
  {
    echo "O professor está dando aula de $this->disciplina <br>";
  }
}

$h1 = new Humano;

var_dump($h1);

$professor = new Professor;

echo "$professor->maos <br>";
echo "$professor->pernas <br>";
$professor->falar();