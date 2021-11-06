<?php
  if (isset($_FILES)) {
    echo "<pre>";
    print_r($_FILES);
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
  <form action="upload-arquivos.php" method="POST" enctype="multipart/form-data">
    <div>
      <input type="file" name="files" class="fm">
    </div>
    <div>
      <input type="submit" value="Enviar" class="btn">
    </div>
  </form>
</body>
</html>