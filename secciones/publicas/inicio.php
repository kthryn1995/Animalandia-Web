<?php include("../../templates/cabecera_publica.php"); ?>


<main class="contenido">




<!--carrusel-->

<section class="hero">
  <div id="carouselAnimalandia" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../src/img/carrusel/banner1.jpg" class="d-block w-100 carousel-img" alt="Rescate">
      </div>

      <div class="carousel-item">
        <img src="../../src/img/carrusel/bienvenidos.png" class="d-block w-100 carousel-img" alt="Adopción">
      </div>

      <div class="carousel-item">
        <img src="../../src/img/carrusel/banner3.jpg" class="d-block w-100 carousel-img" alt="Ayuda">
      </div>
    </div>

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
        <h5>apadrina</h5>
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








<section class="noticias container">
  <h2>Noticias de interés</h2>

  <div class="row mt-4">
    <div class="col-md-4 noticia-card">
      <h5>Jornada de adopción</h5>
      <p>Próximamente realizaremos una jornada...</p>
      <a href="#">Ver más</a>
    </div>
  </div>
</section>





</main>

<?php include("../../templates/pie_publico.php"); ?>
