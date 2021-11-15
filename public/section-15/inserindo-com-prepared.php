<?php

$host = 'mysql';
$user = 'root';
$password = 'root';
$dbname = 'cursophp';

$conn = new mysqli($host, $user, $password, $dbname);

$nome = "Suporte de microfone";
$descricao = "O suporte é novo e foi fabricado na China";

$smtm = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$smtm->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double
$smtm->execute();