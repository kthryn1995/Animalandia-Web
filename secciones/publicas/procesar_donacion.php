<?php
require_once "../../configuraciones/bd.php";

// 1. Recibir datos
$nombre = $_POST['nombre'];
$metodo = $_POST['metodo'];
$monto  = $_POST['monto'];

// 2. Validaciones básicas
if (empty($nombre) || empty($metodo) || empty($monto)) {
    die("❌ Todos los campos son obligatorios");
}

if ($monto <= 0) {
    die("❌ El monto debe ser mayor a cero");
}

// 3. Guardar en BD
$sql = "INSERT INTO donacion (nombreDonante, metodo, monto, estado)
        VALUES ('$nombre', '$metodo', '$monto', 'pendiente')";

if (!$conexion->query($sql)) {
    die("❌ Error al guardar donación: " . $conexion->error);
}

// 4. Redirigir según método de pago
switch ($metodo) {
    case 'nequi':
        header("Location: https://www.nequi.com.co/");
        break;

    case 'daviplata':
        header("Location: https://daviplata.com/");
        break;

    case 'transferencia':
        header("Location: https://www.grupobancolombia.com/");
        break;

    default:
        header("Location: gracias.php");
        break;
}

exit;
