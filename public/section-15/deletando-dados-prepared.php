<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$id = 11;

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

$stmt->bind_param('i', $id);

$stmt->execute();

$stmt->close();