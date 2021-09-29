<?php

function parOuImpar(int $numero): void
{
  echo $numero % 2 === 0 ? "$numero é par <br>" : "$numero é ímpar <br>";

 /*  if($numero % 2 === 0) {
    echo "$numero é par <br>";
  } else {
    echo "$numero é ímpar <br>";
  } */
}

parOuImpar(11);