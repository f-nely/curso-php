<?php

use HDC\DAO\CarDao;
use HDC\Models\Car;

require_once 'vendor/autoload.php';

$host = 'mysql';
$dbname = 'daotest';
$user = 'root';
$pass = 'root';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  $error = $e->getMessage();
  echo "Erro: {$error}";
}

$carDao = new CarDao($conn);

$brand = $_POST['brand'];
$km = $_POST['km'];
$color = $_POST['color'];

var_dump($brand, $km, $color);

$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);

$carDao->create($newCar);

//header('Location: index.php');