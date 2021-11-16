<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$id = 9;
$nome = 'Sofá';
$descricao = 'Sofá seminovo, com madeira de demolição';

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$stmt->bind_param('ssi', $nome, $descricao, $id);

$stmt->execute();

if ($stmt->error) {
  echo 'Erro: ' . $stmt->error;
}