<?php

if (isset($_COOKIE['user'])) {
  $user = $_COOKIE['user'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Página</h1>
  <?php if($user !== ''):?>
    <p>Seja bem-vindo <?= $user; ?></p>
  <?php endif; ?>
</body>
</html>