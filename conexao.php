<?php

$hostname = "localhost";
$database = "db_adote_ca";
$usuario = "root";
$senha = "root";

$conexao = new mysqli($hostname, $usuario, $senha, $database);
if (!$conexao) {
    die("Houve um erro: " . mysqli_connect_error());
}