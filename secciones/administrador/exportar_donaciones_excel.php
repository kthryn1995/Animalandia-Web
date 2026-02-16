<?php
require_once "../../configuraciones/bd.php";

// =======================
// ARMAR FILTROS
// =======================
$condiciones = [];

if (!empty($_GET['estado'])) {
  $estado = $conexion->real_escape_string($_GET['estado']);
  $condiciones[] = "estado = '$estado'";
}

if (!empty($_GET['metodo'])) {
  $metodo = $conexion->real_escape_string($_GET['metodo']);
  $condiciones[] = "metodo = '$metodo'";
}

if (!empty($_GET['desde']) && !empty($_GET['hasta'])) {
  $desde = $conexion->real_escape_string($_GET['desde']);
  $hasta = $conexion->real_escape_string($_GET['hasta']);
  $condiciones[] = "DATE(fecha) BETWEEN '$desde' AND '$hasta'";
}

// =======================
// CONSULTA FINAL
// =======================
$sql = "SELECT * FROM donacion";

if (!empty($condiciones)) {
  $sql .= " WHERE " . implode(" AND ", $condiciones);
}

$sql .= " ORDER BY fecha DESC";

$resultado = $conexion->query($sql);

// =======================
// CABECERAS EXCEL
// =======================
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=donaciones_filtradas.xls");
header("Pragma: no-cache");
header("Expires: 0");

// =======================
// CONTENIDO EXCEL
// =======================
echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Donante</th>
        <th>Monto</th>
        <th>Método</th>
        <th>Estado</th>
        <th>Fecha</th>
      </tr>";

while ($d = $resultado->fetch_assoc()) {
  echo "<tr>
          <td>{$d['idDonacion']}</td>
          <td>{$d['nombreDonante']}</td>
          <td>{$d['monto']}</td>
          <td>{$d['metodo']}</td>
          <td>{$d['estado']}</td>
          <td>{$d['fecha']}</td>
        </tr>";
}

echo "</table>";
exit;
