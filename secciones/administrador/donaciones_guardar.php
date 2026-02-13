<?php
require_once "../../configuraciones/bd.php";

$nombre = $_POST['nombreDonante'];
$monto  = $_POST['monto'];
$metodo = $_POST['metodo'];
$estado = $_POST['estado'];

$sql = "INSERT INTO donacion 
(nombreDonante, monto, metodo, estado)
VALUES 
('$nombre', '$monto', '$metodo', '$estado')";

if ($conexion->query($sql)) {
    header("Location: donaciones.php");
    exit;
} else {
    echo "❌ Error al guardar: " . $conexion->error;
}
