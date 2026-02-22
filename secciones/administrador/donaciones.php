<?php
require_once "../../configuraciones/bd.php";

/* =========================
   FILTROS
========================= */
$where = [];

if (!empty($_GET['desde'])) {
  $where[] = "fecha >= '" . $_GET['desde'] . "'";
}

if (!empty($_GET['hasta'])) {
  $where[] = "fecha <= '" . $_GET['hasta'] . "'";
}

if (!empty($_GET['metodo'])) {
  $where[] = "metodo = '" . $_GET['metodo'] . "'";
}

if (!empty($_GET['estado'])) {
  $where[] = "estado = '" . $_GET['estado'] . "'";
}

$whereSQL = '';
if ($where) {
  $whereSQL = 'WHERE ' . implode(' AND ', $where);
}

/* =========================
   DONACIONES
========================= */
$sql = "SELECT * FROM donacion $whereSQL ORDER BY fecha DESC";
$resultado = $conexion->query($sql);

/* =========================
   TOTALES
========================= */
$sqlTotal = "
  SELECT 
    COUNT(*) AS total_donaciones,
    SUM(monto) AS total_monto,
    SUM(CASE WHEN estado = 'aprobado' THEN monto ELSE 0 END) AS total_aprobado,
    SUM(CASE WHEN estado = 'pendiente' THEN monto ELSE 0 END) AS total_pendiente
  FROM donacion
  $whereSQL
";

$totales = $conexion->query($sqlTotal)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Donaciones | Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/animalandiaweb/src/css/donacionesadministrador.css">
</head>

<body>

<div class="container-fluid my-5 px-4">

  <!-- HEADER -->
  <div class="card-admin mb-4 header-donaciones">
    <h3>💰 Donaciones recibidas</h3>

    <div>
      <a href="donaciones_crear.php" class="btn btn-primary">
        ➕ Registrar donación
      </a>

      <a href="exportar_donaciones_excel.php?<?= http_build_query($_GET) ?>"
         class="btn btn-outline-success ms-2">
        📤 Exportar a Excel
      </a>
    </div>
  </div>

  <!-- CONTENIDO -->
  <div class="row g-4">

    <!-- COLUMNA IZQUIERDA: FILTROS + RESUMEN -->
    <div class="col-lg-4">

      <form method="GET" class="card-admin mb-4 filtros-donaciones">
        <div class="mb-3">
          <label class="form-label">Desde</label>
          <input type="date" name="desde" class="form-control" value="<?= $_GET['desde'] ?? '' ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Hasta</label>
          <input type="date" name="hasta" class="form-control" value="<?= $_GET['hasta'] ?? '' ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Método</label>
          <select name="metodo" class="form-select">
            <option value="">Todos</option>
            <option value="efectivo">Efectivo</option>
            <option value="transferencia">Transferencia</option>
            <option value="nequi">Nequi</option>
            <option value="daviplata">Daviplata</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Estado</label>
          <select name="estado" class="form-select">
            <option value="">Todos</option>
            <option value="aprobado">Aprobado</option>
            <option value="pendiente">Pendiente</option>
            <option value="rechazada">Rechazada</option>
          </select>
        </div>

        <button class="btn btn-primary w-100 mb-2">🔍 Filtrar</button>
        <a href="donaciones.php" class="btn btn-secondary w-100">🧹 Limpiar</a>
      </form>

      <div class="resumen mb-3">
        <h6>Total donaciones</h6>
        <h4><?= $totales['total_donaciones'] ?></h4>
      </div>

      <div class="resumen mb-3">
        <h6>Monto total</h6>
        <h4>$<?= number_format($totales['total_monto'], 2) ?></h4>
      </div>

      <div class="resumen aprobado mb-3">
        <h6>Aprobadas</h6>
        <h4>$<?= number_format($totales['total_aprobado'], 2) ?></h4>
      </div>

      <div class="resumen pendiente">
        <h6>Pendientes</h6>
        <h4>$<?= number_format($totales['total_pendiente'], 2) ?></h4>
      </div>

    </div>

    <!-- COLUMNA DERECHA: TABLA -->
    <div class="col-lg-8">

      <div class="card-admin">
        <div class="table-responsive">
          <table class="table table-donaciones align-middle mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Donante</th>
                <th>Monto</th>
                <th>Método</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th class="text-center">Acciones</th>
              </tr>
            </thead>

            <tbody>
              <?php if ($resultado->num_rows > 0) { ?>
                <?php while ($d = $resultado->fetch_assoc()) { ?>
                  <tr>
                    <td><?= $d['idDonacion'] ?></td>
                    <td><?= htmlspecialchars($d['nombreDonante']) ?></td>
                    <td><strong>$<?= number_format($d['monto'], 2) ?></strong></td>
                    <td><?= ucfirst($d['metodo']) ?></td>
                    <td><?= date("d/m/Y", strtotime($d['fecha'])) ?></td>
                    <td>
                      <span class="estado <?= $d['estado'] ?>">
                        <?= ucfirst($d['estado']) ?>
                      </span>
                    </td>
                    <td class="text-center">
                      <a href="donacion_estado.php?id=<?= $d['idDonacion'] ?>&estado=aprobado"
                         class="btn-accion aprobar">✔</a>
                      <a href="donacion_estado.php?id=<?= $d['idDonacion'] ?>&estado=rechazada"
                         class="btn-accion rechazar">✖</a>
                    </td>
                  </tr>
                <?php } ?>
              <?php } else { ?>
                <tr>
                  <td colspan="7" class="text-center text-muted">
                    No hay donaciones registradas
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

</div>

</body>
</html>
