<?php
require_once "../../configuraciones/bd.php";

if (!isset($_GET['id'])) {
    die("❌ ID no recibido");
}

$id = $_GET['id'];
$conexion = $conexion;

// (opcional) eliminar imagen del servidor
$sqlImg = "SELECT rutaFoto FROM noticias WHERE idNoticias = $id";
$resImg = $conexion->query($sqlImg);

if ($resImg->num_rows > 0) {
    $img = $resImg->fetch_assoc()['rutaFoto'];
    $ruta = "../../src/img/noticias/" . $img;

    if (file_exists($ruta)) {
        unlink($ruta);
    }
}

// eliminar noticia
$sql = "DELETE FROM noticias WHERE idNoticias = $id";

if ($conexion->query($sql)) {
    header("Location: noticias.php");
    exit;
} else {
    echo "❌ Error al eliminar: " . $conexion->error;
}

