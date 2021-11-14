<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

echo '<pre>';
print_r($result);

$conn->close();