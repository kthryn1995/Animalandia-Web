<?php
include("../../templates/cabecera_admin.php");
require_once "../../configuraciones/bd.php";

if (!isset($_GET['id'])) {
    die("❌ ID de noticia no recibido");
}

$id = $_GET['id'];
$conexion = $conexion;

$sql = "SELECT * FROM noticias WHERE idNoticias = $id";
$resultado = $conexion->query($sql);

if ($resultado->num_rows === 0) {
    die("❌ Noticia no encontrada");
}

$noticia = $resultado->fetch_assoc();
?>

<h2>✏️ Editar Noticia</h2>

<form action="noticias_actualizar.php" method="POST" enctype="multipart/form-data">

  <input type="hidden" name="idNoticias" value="<?= $noticia['idNoticias'] ?>">

  <div class="mb-3">
    <label>Título</label>
    <input type="text" name="titulo" class="form-control"
           value="<?= $noticia['titulo'] ?>" required>
  </div>

  <div class="mb-3">
    <label>Contenido</label>
    <textarea name="contenido" class="form-control" rows="5" required><?= $noticia['contenido'] ?></textarea>
  </div>

  <div class="mb-3">
    <label>Imagen actual</label><br>
    <img src="../../src/img/noticias/<?= $noticia['rutaFoto'] ?>" width="120">
  </div>

  <div class="mb-3">
    <label>Nueva imagen (opcional)</label>
    <input type="file" name="imagen" class="form-control">
  </div>

  <button type="submit" class="btn btn-success">💾 Actualizar</button>
  <a href="noticias.php" class="btn btn-secondary">↩ Volver</a>

</form>

<?php include("../../templates/pie_admin.php"); ?>



