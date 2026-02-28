<?php
require_once "../../configuraciones/bd.php";

if (!isset($_GET['id'])) {
    die("❌ Donación no válida");
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM donacion WHERE idDonacion = $id";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 0) {
    die("❌ Donación no encontrada");
}

$donacion = $resultado->fetch_assoc();

$metodo = $donacion['metodo'];
$monto  = $donacion['monto'];
$nombre = $donacion['nombreDonante'];

// Selección de QR oficial
switch ($metodo) {
    case 'nequi':
        $qr = "../../src/img/codigosQR/qr_nequi_oficial.png";
        $cuenta = "Nequi: 3001234567";
        $metodoMostrar = "Nequi";
        break;

    case 'daviplata':
        $qr = "../../src/img/codigosQR/qr_daviplata_oficial.png";
        $cuenta = "Daviplata: 3109876543";
        $metodoMostrar = "Daviplata";
        break;

    case 'transferencia':
        $qr = "../../src/img/codigosQR/qr_bancolombia_oficial.png";
        $cuenta = "Cuenta Ahorros Bancolombia: 123456789";
        $metodoMostrar = "Transferencia Bancaria";
        break;

    default:
        $qr = "";
        $cuenta = "Método no válido";
        $metodoMostrar = "No válido";
        break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Donación - Animalandia</title>
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4 text-center">

        <h2 class="mb-3">🐾 Gracias por apoyar Animalandia</h2>

        <p><strong>Donante:</strong> <?= htmlspecialchars($nombre); ?></p>
        <p><strong>Método seleccionado:</strong> <?= $metodoMostrar; ?></p>

        <hr>

        <h4 class="text-success fw-bold">
            Monto a pagar: $<?= number_format($monto, 0, ',', '.'); ?>
        </h4>

        <p class="text-muted">
            Referencia: <strong>DON-<?= $id; ?></strong>
        </p>

        <hr>

        <h5>Escanea el código QR oficial</h5>

        <?php if ($qr != ""): ?>
            <img src="<?= $qr; ?>" 
                 alt="Código QR" 
                 width="250" 
                 class="my-3 img-fluid">
        <?php else: ?>
            <p class="text-danger">No se encontró QR para este método.</p>
        <?php endif; ?>

        <p class="mt-3"><?= $cuenta; ?></p>

        <div class="alert alert-warning mt-3">
            📌 Después de realizar el pago, conserva el comprobante.
        </div>

        <div class="mt-4">
            <a href="inicio.php" class="btn btn-success btn-lg">
                     Volver al inicio
            </a>
        </div>

    </div>
</div>

</body>
</html>