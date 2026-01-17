<?php
require_once "../../configuraciones/bd.php";
<?php
echo "LLEGUE AL GUARDAR";
exit;


// 1️⃣ Validar que el formulario venga por POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: noticias.php");
    exit;
}

// 2️⃣ Recibir datos
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];

// 3️⃣ Validar imagen
if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== 0) {
    die("❌ Error al subir la imagen");
}

// 4️⃣ Procesar imagen
$nombreImagen = time() . "_" . $_FILES['imagen']['name'];
$rutaDestino = "../../src/img/noticias/" . $nombreImagen;

// Crear carpeta si no existe
if (!is_dir("../../src/img/noticias")) {
    mkdir("../../src/img/noticias", 0777, true);
}

// Mover imagen
if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
    die("❌ No se pudo guardar la imagen");
}

// 5️⃣ Conectar a la BD
$conexion = new mysqli("localhost", "root", "", "fundacionanimalandia");

if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
}

// 6️⃣ Insertar noticia
$sql = "INSERT INTO noticias (titulo, contenido, fecha, rutaFoto)
        VALUES (?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $titulo, $contenido, $fecha, $nombreImagen);

if ($stmt->execute()) {
    header("Location: noticias.php");
} else {
    echo "❌ Error al guardar la noticia";
}

$stmt->close();
$conexion->close();
