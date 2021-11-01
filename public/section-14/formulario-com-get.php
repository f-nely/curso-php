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
  <form action="processamento.php" method="GET">
    <div>
      <input type="text" name="nome" placeholder="Preencha seu nome" class="fm">
    </div>
    <div>
      <input type="number" name="idade" min="18" max="100" step="5" placeholder="Preencha sua idade" class="fm">
    </div>
    <div>
      <input type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>
</html>

