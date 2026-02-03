
<?php
require_once "../../configuraciones/bd.php";

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = date("Y-m-d");

// IMAGEN
$nombreImagen = $_FILES['imagen']['name'];
$rutaTemporal = $_FILES['imagen']['tmp_name'];
$rutaFinal = "../../src/img/noticias/" . $nombreImagen;

// mover imagen
move_uploaded_file($rutaTemporal, $rutaFinal);
$idAdmin = 1; // ESTE ID YA EXISTE EN TU TABLA administrador

// guardar en BD
$sql = "INSERT INTO noticias (titulo, contenido, fecha, rutaFoto,
Administrador_idadministrador)
        VALUES ('$titulo', '$contenido', '$fecha', '$nombreImagen',$idAdmin)";

if ($conexion->query($sql)) {
    header("Location: noticias.php");
    exit;
} else {
    echo "Error al guardar noticia: " . $conexion->error;
}
    
