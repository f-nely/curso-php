<?php

use HDC\DAO\CarDao;
use HDC\DAO\ICarDao;
use HDC\Models\Car;

require_once 'vendor/autoload.php';

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
    <h1 id="main-title">Insira um carro:</h1>
    <form action="process.php" method="POST">
      <div class="form-group">
          <label for="brand">Marca do carro:</label>
          <input type="text" class="form-control" name="brand" placeholder="Insira a marca do carro" required>
      </div>
      <div class="form-group">
          <label for="km">Kilometragem:</label>
          <input type="text" class="form-control" name="km" placeholder="Insira a kilometragem do carro" required>
      </div>
      <div class="form-group">
          <label for="color">Cor do carro:</label>
          <input type="text" class="form-control" name="color" placeholder="Insira a cor do carro" required>
      </div>
      <div class="form-group">
          <input type="submit" class="btn btn-primary mb-3" value="Salvar">
      </div>
    </form>
  </div>
</body>
</html>