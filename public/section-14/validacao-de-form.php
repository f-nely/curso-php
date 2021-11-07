<?php
$validacoes = [];

if (count($_POST) > 0) {
  if ($_POST['nome'] === '') {
    $validacoes[] = "Por favor, preencha o nome do usuário!";
  }

  if ($_POST['email'] === '') {
    $validacoes[] = "Por favor, preencha o email do usuário!";
  }

  if ($_POST['senha'] !== $_POST['confirmacao']) {
    $validacoes[] = "As senhas devem ser iguais!";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <?php if(count($validacoes)): ?>
    <ul>
      <?php foreach($validacoes as $validacao):?>
        <li><?=$validacao; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <form action="validacao-de-form.php" method="POST">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" class="fm">
    </div>
    <div>
      <input type="email" name="email" placeholder="Digite seu e-mail" class="fm">
    </div>
    <div>
      <input type="password" name="senha" placeholder="Digite a sua senha" class="fm">
    </div>
    <div>
      <input type="password" name="confirmacao" placeholder="Confirme a sua senha" class="fm">
    </div>
    <div>
      <input type="submit" value="Enviar"  class="btn">
    </div>
  </form>
</body>
</html>