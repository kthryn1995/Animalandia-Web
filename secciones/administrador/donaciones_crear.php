<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Donación</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../src/css/creardonacion.css">

</head>

<body>

<div class="container my-5">

  <h3 class="mb-4">➕ Registrar donación manual</h3>

  <form action="donaciones_guardar.php" method="POST">

    <div class="mb-3">
      <label>Nombre del donante</label>
      <input type="text" name="nombreDonante" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Monto</label>
      <input type="number" name="monto" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Método de pago</label>
      <select name="metodo" class="form-select" required>
        <option value="">Seleccione</option>
        <option value="efectivo">Efectivo</option>
        <option value="transferencia">Transferencia</option>
        <option value="nequi">Nequi</option>
        <option value="daviplata">Daviplata</option>
      </select>
    </div>

    <div class="mb-4">
      <label>Estado</label>
      <select name="estado" class="form-select">
        <option value="aprobado">Aprobado</option>
        <option value="pendiente">Pendiente</option>
      </select>
    </div>

    <button type="submit" class="btn btn-success">💾 Guardar donación</button>
    <a href="donaciones.php" class="btn btn-secondary">↩ Volver</a>

  </form>

</div>

</body>
</html>
