<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'] . "/AnimalandiaWeb/configuraciones/bd.php");

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM administrador WHERE nombre = '$nombre' AND clave = '$clave'";
$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) == 1){

    $_SESSION['admin'] = $nombre;
    header("Location: inicio_Administrador.php");
    exit();

}else{

    header("Location: login.php?error=1");
    exit();
}