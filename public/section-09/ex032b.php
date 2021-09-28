<?php

function fullName($first_name, $last_name): string
{
  return $first_name . ' '. $last_name;
}

echo fullName('Taylor', 'Otwell');