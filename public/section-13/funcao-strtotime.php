<?php

date_default_timezone_set('America/Sao_Paulo');

$cincoDias = strtotime("5 days");

echo "$cincoDias <br>";

$dezDias = strtotime("10 days");

echo "$dezDias <br>";

$dataAtualMais5 = date("d/m/y", $cincoDias);

echo "$dataAtualMais5 <br>";

$dataAtualMais10 = date("d/m/y", $dezDias);

echo "$dataAtualMais10 <br>";

$doisMeses = strtotime("2 months");

$dataAtualMaisDoisMeses = date("d/m/y", $doisMeses);

echo "$dataAtualMaisDoisMeses <br>";

$dozeAnos = strtotime("12 years");

echo date("d/m/Y", $dozeAnos);