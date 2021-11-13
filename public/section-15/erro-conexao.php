<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';



 $conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_errno) {
  echo "Erro na conexão <br>";
  echo "Erro: " . mysqli_connect_error();
}

 /* check connection */
/* if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

if (!$conn->query("SET a=1")) {
  printf("Errormessage: %s\n", $conn->error);
}  */

/* close connection */
$conn->close();