<?php

namespace HDC\DAO;

use HDC\Models\Car;

interface ICarDao
{
  public function create(Car $car);
  public function findAll();
}