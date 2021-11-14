<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$table = 'itens';
$nome = 'Xícara';
$descricao = 'É uma xícara usada de cor azul';

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();