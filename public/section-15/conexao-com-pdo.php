<?php

$host = 'mysql';
$db = 'cursophp';
$user = 'root';
$password = 'root';

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  var_dump($conn);
} catch (Throwable | PDOException $e) {
  echo $e->getCode() . '<br>';
  echo $e->getMessage();
}