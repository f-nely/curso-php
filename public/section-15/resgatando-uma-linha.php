<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$id = 6;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param('i', $id);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

echo '<pre>';
print_r($item);

$conn->close();