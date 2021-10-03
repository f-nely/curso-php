<?php

$carros = ['Jaguar', 3.0, 'azul', 18, 'Teto solar', 'automático'];

list($marca, $motor, $cor, $aro, $teto, $cambio) = $carros;

echo "$marca <br>";
printf("%.1f", $motor);
echo "<br> $cor <br>";
echo "$aro <br>";
echo "$teto <br>";
echo "$cambio <br>";