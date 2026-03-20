<?php

if ($_SERVER['SERVER_NAME'] == "localhost") {

    // CONEXIÓN PARA XAMPP (tu PC)
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $baseDatos = "fundacionanimalandia";

} else {

    // CONEXIÓN PARA HOSTING (InfinityFree)
    $servidor = "sql111.infinityfree.com";
    $usuario = "if0_41348831";
    $password = "4SDEDOsluD";
    $baseDatos = "if0_41348831_fundacionanimalandia";

}

$conexion = new mysqli($servidor, $usuario, $password, $baseDatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>

