<?php
require_once "../../configuraciones/bd.php";

$conexion = $conexion;

// 1. Recibir datos
$id = $_POST['idNoticias'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

// 2. Ver si se subió nueva imagen
if (!empty($_FILES['foto']['name'])) {

    $nombreImagen = time() . "_" . $_FILES['foto']['name'];
    $ruta = "../../src/img/noticias/" . $nombreImagen;

    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);

    $sql = "UPDATE noticias 
            SET titulo='$titulo', contenido='$contenido', rutaFoto='$nombreImagen'
            WHERE idNoticias=$id";
} else {

    $sql = "UPDATE noticias 
            SET titulo='$titulo', contenido='$contenido'
            WHERE idNoticias=$id";
}

// 3. Ejecutar
if ($conexion->query($sql)) {
    header("Location: noticias.php");
} else {
    echo "❌ Error al actualizar: " . $conexion->error;
}
