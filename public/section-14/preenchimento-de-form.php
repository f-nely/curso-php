<?php

$usuario = [
  'nome' => 'Matheus',
  'idade' => 29,
  'profissao' => 'Programador'
];

if ($usuario) {
  $nome = $usuario['nome'];
  $idade = $usuario['idade'];
  $profissao = $usuario['profissao'];
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
  <form action="">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" value="<?=$nome;?>" class="fm">
    </div>
    <div>
      <input type="number" name="idade" placeholder="Digite sua idade" value="<?=$idade;?>" class="fm">
    </div>
    <div>
      <input type="text" name="profissao" value="<?=$profissao;?>" class="fm">
    </div>
    <div>
      <input type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>
</html>