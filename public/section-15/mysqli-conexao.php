<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

var_dump($conn);

/* close connection */
$conn->close();