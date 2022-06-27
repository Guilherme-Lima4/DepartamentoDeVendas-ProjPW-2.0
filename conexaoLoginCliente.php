<?php

$usuario = 'bd12c9b932cc13';
$senha = 'f0785053';
$database = 'heroku_a02c0d302263f51';
$host = 'us-cdbr-east-05.cleardb.net';
$porta = '3306';

$mysqli = new mysqli($host, $usuario, $senha, $database);

$conn = mysqli_connect($host, $usuario, $senha, $database, $porta);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}