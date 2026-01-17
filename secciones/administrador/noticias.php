<?php include("../../templates/cabecera_admin.php"); ?>
<?php require_once("../../configuraciones/bd.php"); ?>

<?php
$sql = "SELECT * FROM noticias ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<div class="container mt-4">

  <h2>📰 Gestión de Noticias</h2>

  <a href="noticia_crear.php" class="btn btn-primary mb-3">
    ➕ Nueva noticia
  </a>

  <table class="table table-bordered table-hover">
    <thead class="table-light">
      <tr>
        <th>Título</th>
        <th>Fecha</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      <?php if ($resultado && $resultado->num_rows > 0): ?>
        <?php while ($noticia = $resultado->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($noticia['titulo']) ?></td>
            <td><?= $noticia['fecha'] ?></td>
            <td>
              <?php if (!empty($noticia['rutaFoto'])): ?>
                <img src="../../src/img/noticias/<?= $noticia['rutaFoto'] ?>" width="80">
              <?php else: ?>
                Sin imagen
              <?php endif; ?>
            </td>
            <td>
              <a href="noticia_editar.php?id=<?= $noticia['idNoticias'] ?>"
                 class="btn btn-warning btn-sm">✏️</a>

              <a href="noticia_eliminar.php?id=<?= $noticia['idNoticias'] ?>"
                 class="btn btn-danger btn-sm"
                 onclick="return confirm('¿Eliminar esta noticia?')">
                 🗑️
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr>
          <td colspan="4" class="text-center">No hay noticias registradas</td>
        </tr>
      <?php endif; ?>

    </tbody>
  </table>

</div>

<?php include("../../templates/pie_admin.php"); ?>
