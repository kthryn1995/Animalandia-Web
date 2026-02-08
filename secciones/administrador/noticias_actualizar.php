<?php
require_once "../../configuraciones/bd.php";

// ===============================
// VALIDAR POST
// ===============================
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acceso no permitido");
}

// ===============================
// RECIBIR DATOS
// ===============================
$id = intval($_POST['idNoticias'] ?? 0);
$titulo = trim($_POST['titulo'] ?? '');
$contenido = trim($_POST['contenido'] ?? '');

if ($id <= 0) {
    die("❌ ID inválido");
}

if (empty($titulo) || empty($contenido)) {
    die("❌ Título y contenido son obligatorios");
}

// ===============================
// IMAGEN (OPCIONAL)
// ===============================
$actualizarImagen = false;
$nombreImagen = null;

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {

    $extensionesPermitidas = ['jpg', 'jpeg', 'png', 'webp'];
    $extension = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));

    if (!in_array($extension, $extensionesPermitidas)) {
        die("❌ Formato de imagen no permitido");
    }

    $nombreImagen = time() . "_" . basename($_FILES['imagen']['name']);

    $rutaDestino = $_SERVER['DOCUMENT_ROOT'] . "/AnimalandiaWeb/src/img/noticias/" . $nombreImagen;

    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        die("❌ Error al subir la imagen");
    }

    $actualizarImagen = true;
}

// ===============================
// UPDATE
// ===============================
if ($actualizarImagen) {

    $sql = "UPDATE noticias 
            SET titulo = ?, contenido = ?, rutaFoto = ?
            WHERE idNoticias = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssi", $titulo, $contenido, $nombreImagen, $id);

} else {

    $sql = "UPDATE noticias 
            SET titulo = ?, contenido = ?
            WHERE idNoticias = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssi", $titulo, $contenido, $id);
}

// ===============================
// EJECUTAR
// ===============================
if ($stmt->execute()) {
    header("Location: noticias.php");
    exit;
} else {
    echo "❌ Error al actualizar: " . $stmt->error;
}

