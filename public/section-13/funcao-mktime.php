<?php

date_default_timezone_set('America/Sao_Paulo');

$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);

echo date("d/m/Y", $dataNascimento) . '<br>';

$dataEspecifica = mktime(10, 20, 02, 04, 28, 2041);

echo date("d/m/y", $dataEspecifica);