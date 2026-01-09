<?php include("../../templates/cabecera_publica.php"); ?>
<link rel="stylesheet" href="/ANIMALANDIAWEB/src/css/donar.css">

<?php
$metodo = $_GET['metodo'] ?? '';
?>

<section class="donacion-wrapper container my-5">

  <div class="donacion-box">

    <!-- COLUMNA IZQUIERDA (IMAGEN) -->
    <div class="donacion-img">
      <img src="../../src/img/donaciones/donacion.jpg"
           alt="Ayuda Animalandia">
      <div class="donacion-img-text">
        <h3>Tu ayuda salva vidas</h3>
        <p>Cada aporte cuenta para rescatar y proteger</p>
      </div>
    </div>

    <!-- COLUMNA DERECHA (FORMULARIO) -->
    <div class="donacion-form">

      <img src="../../src/img/logoanimalandia.png"
           alt="Animalandia"
           class="donacion-logo">

      <h2>Formulario de Donación</h2>
      <p class="donacion-sub">
        Gracias por apoyar nuestra labor 🐾
      </p>

      <form action="procesar_donacion.php" method="POST">

        <input type="hidden" name="fecha"
               value="<?php echo date('Y-m-d H:i:s'); ?>">

        <!-- Nombre -->
        <div class="donacion-input">
          <span class="icon bi bi-person"></span>
          <input type="text" name="nombre"
                 placeholder="Nombre completo" required>
        </div>

        <!-- Método -->
        <div class="donacion-input">
          <span class="icon bi bi-credit-card"></span>
          <select name="metodo" required>
            <option value="">Método de pago</option>
            <option value="nequi" <?= $metodo=='nequi'?'selected':'' ?>>Nequi</option>
            <option value="daviplata" <?= $metodo=='daviplata'?'selected':'' ?>>Daviplata</option>
            <option value="bancolombia" <?= $metodo=='bancolombia'?'selected':'' ?>>Bancolombia</option>
          </select>
        </div>

        <!-- Monto -->
        <div class="donacion-input">
          <span class="icon bi bi-cash"></span>
          <input type="number" name="monto"
                 placeholder="Monto a donar"
                 min="1000" required>
        </div>

        <button type="submit" class="btn-donar">
          Donar ahora
        </button>

      </form>

      <p class="donacion-footer">
        Cambiando vidas, una huellita a la vez 🐶🐱
      </p>

    </div>

  </div>

</section>

<?php include("../../templates/pie_publico.php"); ?>






