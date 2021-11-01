<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Formulário com POST</title>
</head>
<body>
  <form action="cadastro.php" method="POST">
    <div>
      <input type="text" name="marca" placeholder="Marca do carro" class="fm">  
    </div>
    <div>
      <input type="number" name="preco" placeholder="Preço do carro" min="6000" step="100" class="fm">
    </div>
    <div>
      <input type="checkbox" name="opcional[]" value="Teto solar"> Teto solar
    </div>
    <div>
      <input type="checkbox" name="opcional[]" value="Película"> Película
    </div>
    <div>
      <input type="checkbox" name="opcional[]" value="Blindado"> Blindado
    </div>
    <div>
      <input type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>
</html>