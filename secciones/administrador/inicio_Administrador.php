<?php include("../../templates/cabecera_admin.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador - Animalandia</title>
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.min.css">
    
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">🐾 Bienvenido al Panel Administrativo</h2>
    <p class="text-muted">Aquí puedes gestionar todo el sistema de Animalandia.</p>

    <div class="row">

        
        <!-- Noticias -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">📰 Noticias</h5>
                    <p class="card-text">Crea y edita publicaciones.</p>
                    <a href="noticias.php" class="btn btn-success">
                        Administrar
                    </a>
                </div>
            </div>
        </div>

        <!-- Donaciones -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">💰 Donaciones</h5>
                    <p class="card-text">Revisa y exporta donaciones.</p>
                    <a href="donaciones.php" class="btn btn-warning">
                        Ver Donaciones
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="exportar_donaciones_excel.php" class="btn btn-outline-dark">
            📊 Exportar Donaciones a Excel
        </a>

        <a href="cerrar.php" class="btn btn-danger float-end">
            Cerrar sesión
        </a>
    </div>

</div>
<?php include("../../templates/pie_admin.php"); ?>
</body>
</html>

