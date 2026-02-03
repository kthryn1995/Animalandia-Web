<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "fundacionanimalandia";

$conexion = new mysqli($servidor, $usuario, $password, $baseDatos);

if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
}


