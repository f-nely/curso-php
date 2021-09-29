<?php

function defineCorCarro(string $cor = 'vermelha')
{
  return "A cor do carro é $cor <br>";
}

echo defineCorCarro();
echo defineCorCarro('Azul');
