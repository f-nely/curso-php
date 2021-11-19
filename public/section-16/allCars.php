<?php

use HDC\DAO\CarDao;
use HDC\DAO\ICarDao;
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

$cars = $carDao->findAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Todos os carro:</h1>
    <ul>
    <?php foreach($cars as $car): ?>
      <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
    <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>