<?php include("../../templates/cabecera_admin.php"); ?>
<?php
// ===============================
// CABECERA + CONEXIÓN
// ===============================
include("../../templates/cabecera_admin.php");
require_once "../../configuraciones/bd.php";

// ===============================
// VALIDAR ID
// ===============================
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("❌ ID de noticia no recibido");
}

$id = intval($_GET['id']);

// ===============================
// CONSULTAR NOTICIA
// ===============================
$sql = "SELECT * FROM noticias WHERE idNoticias = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    die("❌ Noticia no encontrada");
}

$noticia = $resultado->fetch_assoc();
?>

<!-- =============================== -->
<!-- CONTENIDO -->
<!-- =============================== -->

<h2 class="mb-4">✏️ Editar Noticia</h2>

<form action="noticias_actualizar.php" method="POST" enctype="multipart/form-data">

  <!-- ID oculto -->
  <input type="hidden" name="idNoticias" value="<?= $noticia['idNoticias'] ?>">

  <!-- TÍTULO -->
  <div class="mb-3">
    <label class="form-label">Título</label>
    <input 
      type="text" 
      name="titulo" 
      class="form-control"
      value="<?= htmlspecialchars($noticia['titulo']) ?>"
      required
    >
  </div>

  <!-- CONTENIDO -->
  <div class="mb-3">
    <label class="form-label">Contenido</label>
    <textarea 
      name="contenido" 
      class="form-control" 
      rows="6" 
      required
    ><?= htmlspecialchars($noticia['contenido']) ?></textarea>
  </div>

  <!-- IMAGEN ACTUAL -->
  <div class="mb-3">
    <label class="form-label">Imagen actual</label><br>
    <img 
      src="../../src/img/noticias/<?= $noticia['rutaFoto'] ?>" 
      width="150" 
      class="img-thumbnail"
    >
  </div>

  <!-- NUEVA IMAGEN -->
  <div class="mb-3">
    <label class="form-label">Cambiar imagen (opcional)</label>
    <input type="file" name="imagen" class="form-control">
    <small class="text-muted">Formatos permitidos: jpg, png, webp</small>
  </div>

  <!-- BOTONES -->
  <button type="submit" class="btn btn-success">
    💾 Actualizar
  </button>

  <a href="noticias.php" class="btn btn-secondary ms-2">
    ↩ Volver
  </a>

</form>

<?php include("../../templates/pie_admin.php"); ?>




