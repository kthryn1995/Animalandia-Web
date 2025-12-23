<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Animalandia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS propios -->
    <link rel="stylesheet" href="src/css/main.css">
<!-- Tipografia -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">



</head>

<body>
 <!-- Barra azul inicial de la pagina-->
<div class="top-bar"></div>

<nav class="navbar navbar-expand-lg">

</nav>


<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        <!-- 🏠 ICONO INICIO -->
        <a class="navbar-brand home-icon" href="index.php">
    <span class="home-emoji">🏠</span>
    <span class="home-text">Inicio</span>

</a>
        </a>

        <!-- Botón responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPublico">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="menuPublico">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="adopciones.php">Adopciones</a></li>
                <li class="nav-item"><a class="nav-link" href="ayudar.php">¿Cómo ayudar?</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contáctanos</a></li>
            </ul>
        </div>

    </div>
</nav>

