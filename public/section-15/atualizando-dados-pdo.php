<?php

$host = 'mysql';
$db = 'cursophp';
$user = 'root';
$password = 'root';

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $id = 4;
  $nome = 'Teclado Microsoft';
  $descricao = 'Este teclado é novo e está na caixa.';

  $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao  = :descricao WHERE id = :id");

  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':descricao', $descricao);

  $stmt->execute();
  
} catch (Throwable | PDOException $e) {
  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}