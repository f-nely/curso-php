<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

$itens = $result->fetch_all();

echo '<pre>';

print_r($itens);