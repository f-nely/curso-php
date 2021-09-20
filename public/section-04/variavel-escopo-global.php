<?php

$teste = 'blabla';

echo "$teste global 1 <br>";

if(5 >2) {
  $teste = 'alterando';
  echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function fuc1()
{
  $teste = 'aa';
  echo "$teste local <br>";
}

fuc1();

function fuc2()
{
 global $teste;
  echo "$teste global função <br>";
}

fuc2();

