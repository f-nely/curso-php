<?php

$host = 'mysql';
$db = 'cursophp';
$user = 'root';
$password = 'root';

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

  $nome = 'Suporte monitor';
  $descricao = 'O suporte está novo e na caixa ainda';

  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':descricao', $descricao);

  $stmt->execute();
} catch (Throwable | PDOException $e) {
  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}