<?php

class Person
{
  public string $name;
  public int $age;

  public function walking(): void
  {
    echo "Person walking around <br>";
  }
}

$p1 = new Person;

$p1->name = 'James Holden';
$p1->age = 34;

var_dump($p1);

$p1->walking();