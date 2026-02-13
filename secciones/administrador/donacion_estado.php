<?php
require_once "../../configuraciones/bd.php";

// Validar que lleguen los datos
if (!isset($_GET['id']) || !isset($_GET['estado'])) {
    die("❌ Datos incompletos");
}

$id = intval($_GET['id']);
$estado = $_GET['estado'];

// Validar estado permitido
$estadosPermitidos = ['aprobado', 'rechazada'];

if (!in_array($estado, $estadosPermitidos)) {
    die("❌ Estado no válido");
}

// Consulta UPDATE
$sql = "UPDATE donacion SET estado = ? WHERE idDonacion = ?";

// Preparar sentencia
$stmt = $conexion->prepare($sql);
$stmt->bind_param("si", $estado, $id);

// Ejecutar
if ($stmt->execute()) {
    header("Location: donaciones.php");
    exit;
} else {
    echo "❌ Error al actualizar estado: " . $conexion->error;
}
