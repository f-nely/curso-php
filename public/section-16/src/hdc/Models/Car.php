<?php

namespace HDC\Models;

class Car
{
  private int $id;
  private string $brand;
  private int $km;
  private string $color;

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getBrand(): string
  {
    return $this->brand;
  }

  public function setBrand(string $brand): void
  {
    $this->brand = $brand;
  }

  public function getKm(): int
  {
    return $this->km;
  }

  public function setKm(int $km): void
  {
    $this->km = $km;
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function setColor(string $color): void
  {
    $this->color = $color;
  }
}