<?php

function velocidadeMaxima(float $velocidade): void
{
  echo "O carro atinge a velocidade máxima de $velocidade km/h <br>";
}

velocidadeMaxima(100);
velocidadeMaxima(300);
velocidadeMaxima(400);

function descreveAnimal(string $nome, string $raca): void
{
  echo "O $nome é da raça $raca <br>";
}

descreveAnimal('Bob', 'Pastor alemão');