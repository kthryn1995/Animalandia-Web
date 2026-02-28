<?php
require_once "../../configuraciones/bd.php";

// 1. Recibir datos
$nombre = trim($_POST['nombre']);
$metodo = trim($_POST['metodo']);
$monto  = trim($_POST['monto']);

// 2. Validaciones básicas
if (empty($nombre) || empty($metodo) || empty($monto)) {
    die("❌ Todos los campos son obligatorios");
}

if (!is_numeric($monto) || $monto <= 0) {
    die("❌ El monto debe ser mayor a cero");
}

// 3. Insertar en BD
$sql = "INSERT INTO donacion (nombreDonante, metodo, monto, estado)
        VALUES ('$nombre', '$metodo', '$monto', 'pendiente')";

if (!$conexion->query($sql)) {
    die("❌ Error al guardar donación: " . $conexion->error);
}

// 4. Obtener el ID de la donación recién creada
$idDonacion = $conexion->insert_id;

// 5. Redirigir a la página del QR
header("Location: pago_qr.php?id=$idDonacion");
exit;
?>
