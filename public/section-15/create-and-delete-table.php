<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

//$conn->query($q));

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();