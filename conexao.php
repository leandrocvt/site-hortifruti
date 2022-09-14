<?php
$servidor = "localhost";
$usuario = "root";
$senha = "MySQL@2022";
$dbname = "bdhortifruti";

$mysqli = new mysqli($servidor, $usuario, $senha, $dbname);

//checar conexão
if($mysqli->connect_errno) {
    echo "Connect failed: " . $mysqli->connect_error;
    exit();
}