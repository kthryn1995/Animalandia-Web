<?php
require_once "../../configuraciones/bd.php";

$sql = "SELECT * FROM donacion ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Donaciones | Admin</title>

  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../src/css/donacionesadministrador.css">



</head>

<body>

<div class="container my-5">

  <div class="card-admin">

    <div class="header-donaciones">
      <h3>💰 Donaciones recibidas</h3>

      <a href="donaciones_crear.php" class="btn btn-primary">
        ➕ Registrar donación
      </a>
    </div>

    <div class="table-responsive">
      <table class="table table-donaciones align-middle">
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

              <td>
                <strong>$<?= number_format($d['monto'], 2) ?></strong>
              </td>

              <td><?= ucfirst($d['metodo']) ?></td>
              <td><?= date("d/m/Y", strtotime($d['fecha'])) ?></td>

              <td>
                <span class="estado <?= $d['estado'] ?>">
                  <?= ucfirst($d['estado']) ?>
                </span>
              </td>

              <td class="text-center">
                <a href="donacion_estado.php?id=<?= $d['idDonacion'] ?>&estado=aprobado"
                   class="btn-accion aprobar"
                   title="Aprobar">✔</a>

                <a href="donacion_estado.php?id=<?= $d['idDonacion'] ?>&estado=rechazada"
                   class="btn-accion rechazar"
                   title="Rechazar">✖</a>
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

</body>
</html>
