<?php

function func1()
{
  $a = 0;
  $a++;

  return $a;
}

echo func1() . '<br>';
echo func1() . '<br>';
echo func1() . '<br><br>';

function func1Static()
{
  static $a = 0;
  $a++;

  return $a;
}

echo func1Static() . '<br>';
echo func1Static() . '<br>';
echo func1Static() . '<br>';