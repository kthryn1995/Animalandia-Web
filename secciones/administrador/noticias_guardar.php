<?php
// conectar a la BD
require_once "../../configuraciones/bd.php";

/* =========================
   VALIDAR ENVÍO DEL FORMULARIO
   ========================= */
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acceso no permitido");
}

/* =========================
   VALIDAR CAMPOS DE TEXTO
   ========================= */
$titulo = trim($_POST['titulo'] ?? '');
$contenido = trim($_POST['contenido'] ?? '');

if (empty($titulo) || empty($contenido)) {
    die("❌ El título y el contenido son obligatorios");
}

/* =========================
   FECHA AUTOMÁTICA
   ========================= */
$fecha = date("Y-m-d");

/* =========================
   VALIDAR IMAGEN
   ========================= */
if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
    die("❌ Debes subir una imagen válida");
}

// extensiones permitidas
$extensionesPermitidas = ['jpg', 'jpeg', 'png', 'webp'];
$extension = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));

if (!in_array($extension, $extensionesPermitidas)) {
    die("❌ Formato de imagen no permitido");
}

/* =========================
   PROCESAR IMAGEN
   ========================= */

// nombre único para evitar sobrescritura
$nombreImagenFinal = time() . "_" . basename($_FILES['imagen']['name']);

// ruta ABSOLUTA del servidor
$carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . "/AnimalandiaWeb/src/img/noticias/";
$rutaFinal = $carpetaDestino . $nombreImagenFinal;

// mover imagen
if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaFinal)) {
    die("❌ Error al guardar la imagen en el servidor");
}

/* =========================
   ADMINISTRADOR (TEMPORAL)
   ========================= */
$idAdmin = 1; // luego vendrá del login

/* =========================
   INSERTAR EN BASE DE DATOS
   ========================= */
$sql = "INSERT INTO noticias 
        (titulo, contenido, fecha, rutaFoto, Administrador_idadministrador)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("❌ Error en la consulta: " . $conexion->error);
}

$stmt->bind_param(
    "ssssi",
    $titulo,
    $contenido,
    $fecha,
    $nombreImagenFinal,
    $idAdmin
);

if ($stmt->execute()) {
    // redirigir al listado
    header("Location: noticias.php");
    exit;
} else {
    echo "❌ Error al guardar noticia: " . $stmt->error;
}

