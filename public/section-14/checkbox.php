<?php
if (isset($_POST['ingredientes'])) {
  print_r($_POST['ingredientes']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <form action="checkbox.php" method="POST">
    <div>
      <input type="checkbox" name="ingredientes[]" value="Tomate" class="fm">Tomate
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Abóbora" class="fm">Abóbora
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Feijão" class="fm">Feijão
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Alface" class="fm">Alface
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Cebola" class="fm">Cebola
    </div>
    <div>
      <input type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>
</html>