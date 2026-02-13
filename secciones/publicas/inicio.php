<?php include("../../templates/cabecera_publica.php"); ?>
<link rel="stylesheet" href="/ANIMALANDIAWEB/src/css/inicio.css">

<main class="contenido">




<!--carrusel-->


<section class="hero">
  <div id="carouselAnimalandia" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

      <!-- SLIDE 1 -->
      <div class="carousel-item active">
        <img src="../../src/img/carrusel/bienvenidaanimalandia.png"
             class="d-block w-100 carousel-img"
             alt="Bienvenida">

        <div class="carousel-overlay">
          <h2>Bienvenidos a Animalandia</h2>
        </div>
      </div>

      <!-- SLIDE 2 (Apadrina) -->
      <div class="carousel-item">
        <img src="../../src/img/carrusel/adoptaoapadrina5.png"
             class="d-block w-100 carousel-img"
             alt="Adopción">

        <div class="carousel-overlay left">
          <h2>Apadrina</h2> 

          <div class="carousel-buttons">
           <a href="https://www.instagram.com/animalandia.38/" target="_blank" class="btn btn-primary" > Buscar en línea</a>

            </a>
            <a href="https://wa.me/573153954727" target="_blank" class="btn btn-outline-light">
              Visitar el refugio
            </a>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="carousel-item">
  <img src="../../src/img/carrusel/donaciones.png"
       class="d-block w-100 carousel-img"
       alt="Donaciones">

  <div class="carousel-overlay left">
    <h2>Tu ayuda cambia vidas</h2>

    <div class="carousel-buttons">
      <a href="/AnimalandiaWeb/secciones/publicas/comoayudar.php"
         class="btn btn-primary">
        Donar ahora
      </a>
    </div>
  </div>
</div>


    <!-- CONTROLES -->
    <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselAnimalandia" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button"
            data-bs-target="#carouselAnimalandia" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
</section>






<!--section de ayuda rapida (adopcion, apadrinar,voluntariado)-->


<section class="ayuda container text-center">
  <h2>¿Cómo puedes ayudar?</h2>

  <div class="row mt-4">
    <div class="col-md-4">
      <a href="adopciones.php" class="ayuda-card">
        <img src="../../src/img/ayuda/adoptanos.png">
        <h5>Adopta</h5>
      </a>
    </div>

    <div class="col-md-4">
      <a href="apadrina.php" class="ayuda-card">
        <img src="../../src/img/ayuda/apadrina.png">
        <h5>Apadrina</h5>
      </a>
    </div>

    <div class="col-md-4">
      <a href="comoayudar.php" class="ayuda-card">
        <img src="../../src/img/ayuda/donaciones.png">
        <h5>Voluntariado</h5>
      </a>
    </div>
  </div>
</section>



<?php
require_once "../../configuraciones/bd.php";

// consulta noticias
$sql = "SELECT * FROM noticias ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<section class="noticias container my-5">
  <h2 class="section-title">Noticias de interés</h2>

  <div class="row mt-4">

    <?php if ($resultado->num_rows > 0): ?>
      
      <?php while ($noticia = $resultado->fetch_assoc()): ?>
        <div class="col-md-6 mb-4">
          <div class="noticia-card">

            <img src="../../src/img/noticias/<?= $noticia['rutaFoto'] ?>" 
                 alt="<?= htmlspecialchars($noticia['titulo']) ?>">

            <div class="noticia-body">
              <h5><?= htmlspecialchars($noticia['titulo']) ?></h5>

              <p>
                <?= substr(strip_tags($noticia['contenido']), 0, 950) ?>...
              </p>

            
            </div>

          </div>
        </div>
      <?php endwhile; ?>

    <?php else: ?>
      <p class="text-center">📰 No hay noticias publicadas aún.</p>
    <?php endif; ?>

  </div>
</section>

    <!-- INSTAGRAM (derecha) -->
  <div class="row mt-5">
  <div class="col-12 d-flex justify-content-center">

    <div class="instagram-card">
      <img src="../../src/img/noticias/instagramnoticias.png" alt="Instagram Animalandia">

      <div class="instagram-body">
        <h5>Síguenos en Instagram</h5>
        <p>
          Entérate de todas nuestras noticias, rescates,
          jornadas y adopciones.
        </p>

        <a href="https://www.instagram.com/animalandia.38/"
           target="_blank"
           class="btn btn-instagram">
          Ir a Instagram
        </a>
      </div>
    </div>

  </div>
</div>



<section class="sobre-nosotros-animalandia">
  <div class="container">

    <h2 class="titulo-principal text-center">
      Un poco sobre nosotros
    </h2>

    <div class="row mt-5">

      <div class="col-md-6 mb-4">
        <div class="card-nosotros">
          <h5>Nuestra misión</h5>
          <p>
            La Fundación Animalandia es una organización sin ánimo de lucro dedicada
            al rescate y rehabilitación de animales en condición de calle,
            vulnerabilidad o abandono, brindándoles una segunda oportunidad a través
            de la adopción responsable.
          </p>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="card-nosotros">
          <h5>Nuestra visión</h5>
          <p>
            Promover la sensibilización colectiva fomentando la esterilización,
            el respeto por la vida, el NO al maltrato animal y la adopción responsable,
            soñando con convertirnos en una organización líder en la protección
            animal.
          </p>
        </div>
      </div>

    </div>

    <div class="cta-nosotros text-center mt-4">
      <p>¿Quieres conocer más sobre nuestra historia y labor?</p>
      <a href="nosotros.php" class="btn btn-animalandia">
        Conócenos
      </a>
    </div>

  </div>
</section>







</main>

<?php include("../../templates/pie_publico.php"); ?>
