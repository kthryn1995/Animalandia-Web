<?php include("../../templates/cabecera_publica.php"); ?>
<link rel="stylesheet" href="/AnimalandiaWeb/src/css/inicio.css">

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

      <!-- SLIDE 2 (Adopta o Apadrina) -->
      <div class="carousel-item">
        <img src="../../src/img/carrusel/adoptaoapadrina5.png"
             class="d-block w-100 carousel-img"
             alt="Adopción">

        <div class="carousel-overlay left">
          <h2>Adopta o Apadrina</h2>

          <div class="carousel-buttons">
           <a href="adopciones.php" class="btn btn-primary" > Buscar en línea</a>

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
