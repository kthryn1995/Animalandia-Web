<?php include("../../templates/cabecera_publica.php"); ?>
<link rel="stylesheet" href="/ANIMALANDIAWEB/src/css/comoayudar.css">



<section class="como-ayudar container my-5">
  <h2 class="text-center mb-4">¿Cómo ayudar?</h2>

  <div class="row">

    <!-- MENÚ LATERAL -->
    <aside class="col-md-3">
      <div class="ayuda-menu">

        <button class="ayuda-btn active" data-section="donaciones">Donaciones 💰</button>
        <button class="ayuda-btn" data-section="apadrinamiento">Apadrinamiento 🐾</button>
        <button class="ayuda-btn" data-section="voluntariado">Voluntariado 🤝</button>
        <button class="ayuda-btn" data-section="especie">Donación en especie 📦</button>
        <button class="ayuda-btn" data-section="difusion">Difusión 📢</button>

      </div>
    </aside>

   
<!-- CONTENIDO DINÁMICO -->
<div class="col-md-9">
  <div class="ayuda-contenido">

    <!-- DONACIONES -->
    <div class="ayuda-section active" id="donaciones">

      <h3 class="ayuda-titulo">Realiza tu donación</h3>
      <p class="ayuda-descripcion">
        Tu apoyo transforma vidas. Con tu ayuda podemos rescatar, alimentar
        y brindar atención médica a animales en situación de abandono.
      </p>

     <!-- MÉTODOS DE DONACIÓN -->
<div class="donacion-bancos">

  <!-- Nequi -->
  <a href="donar.php?metodo=nequi" class="banco-card">
    <img src="../../src/img/bancos/nequi.png" alt="Nequi">
    <p><strong>Nequi</strong></p>
  </a>

  <!-- Daviplata -->
  <a href="donar.php?metodo=daviplata" class="banco-card">
    <img src="../../src/img/bancos/daviplata.png" alt="Daviplata">
    <p><strong>Daviplata</strong></p>
  </a>

  <!-- Bancolombia -->
  <a href="donar.php?metodo=bancolombia" class="banco-card">
    <img src="../../src/img/bancos/bancolombia.png" alt="Bancolombia">
    <p><strong>Bancolombia</strong></p>
  </a>

</div>










        <!-- APADRINAMIENTO -->
        <div class="ayuda-section" id="apadrinamiento">
          <h3>Apadrina un peludo</h3>
          <p>Apadrinar es acompañar de forma constante a uno de nuestros rescatados.</p>
        </div>

        <!-- VOLUNTARIADO -->
        <div class="ayuda-section" id="voluntariado">
          <h3>Voluntariado</h3>
          <p>Tu tiempo también salva vidas. Únete a nuestro equipo.</p>
        </div>

        <!-- DONACIÓN EN ESPECIE -->
        <div class="ayuda-section" id="especie">
          <h3>Donaciones en especie</h3>
          <p>Puedes donar alimento, medicamentos, cobijas y más.</p>
        </div>

        <!-- DIFUSIÓN -->
        <div class="ayuda-section" id="difusion">
          <h3>Difunde nuestra labor</h3>
          <p>Compartir también ayuda. Ayúdanos a llegar a más personas.</p>
        </div>

      </div>
    </div>

  </div>
</section>


<?php include("../../templates/pie_publico.php"); ?>



<!---JAVA SCRIPT Para el cambio dinamico--->

<script>
  const botones = document.querySelectorAll(".ayuda-btn");
  const secciones = document.querySelectorAll(".ayuda-section");

  botones.forEach(btn => {
    btn.addEventListener("click", () => {

      // quitar active a botones
      botones.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      // ocultar secciones
      secciones.forEach(sec => sec.classList.remove("active"));

      // mostrar sección correspondiente
      const id = btn.getAttribute("data-section");
      document.getElementById(id).classList.add("active");
    });
  });
</script>





