<?php

class Humano
{

}

class Animal
{

}

class Professor extends Humano
{

}

$h1 = new Humano;

if($h1 instanceof Humano) {
  echo "É um humano <br>";
}

$animal1 = new Animal;

if($animal1 instanceof Humano) {
  echo "É um humano <br>";
} else {
  echo "Não é um humano <br>";
}

$pro1 = new Professor;

if($pro1 instanceof Professor) {
  echo "É um professor <br>";
} else {
  echo "Não é um professor <br>";
}

if($pro1 instanceof Humano) {
  echo "É um humano <br>";
} else {
  echo "Não é um humano <br>";
}