<?php

$host = 'mysql';
$db = 'cursophp';
$user = 'root';
$password = 'root';

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $id = 5;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

  $stmt->bindParam(':id', $id);

  $stmt->execute();

  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  echo '<pre>';
  print_r($data);

  $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo '<pre>';
  print_r($itens);
} catch (Throwable | PDOException $e) {
  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}