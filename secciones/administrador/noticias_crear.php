<?php include("../../templates/cabecera_admin.php"); ?>

<div class="container my-4">

  
h2 class="mb-4">📰 Crear nueva noticia</h2>
  <form action="noticias_guardar.php" method="POST" enctype="multipart/form-data">

<

    <!-- TÍTULO --> 
    <div class="mb-3">
      <label class="form-label">Título de la noticia</label>
      <input type="text" name="titulo" class="form-control" required>
    </div>

    <!-- CONTENIDO -->
    <div class="mb-3">
      <label class="form-label">Contenido</label>
      <textarea name="contenido" rows="5" class="form-control" required></textarea>
    </div>

    <!-- IMAGEN -->
    <div class="mb-3">
      <label class="form-label">Imagen</label>
      <input type="file" name="imagen" class="form-control" accept="image/*" required>
    </div>

    <!-- FECHA -->
    <div class="mb-3">
      <label class="form-label">Fecha</label>
      <input type="date" name="fecha" class="form-control" required>
    </div>

    <!-- BOTONES -->
    <div class="mt-4">
      <button type="submit" class="btn btn-success">
        💾 Guardar noticia
      </button>

      <a href="noticias.php" class="btn btn-secondary ms-2">
        ↩ Volver
      </a>
    </div>

  </form>

</div>

<?php include("../../templates/pie_admin.php"); ?>
+