<?php include("../../templates/cabecera_publica.php"); ?>
<link rel="stylesheet" href="../../src/css/comoayudar.css">



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
</div>





        <!-- APADRINAMIENTO -->
        <div class="ayuda-section" id="apadrinamiento">
          <h3>Apadrina un peludo</h3>
          <p>Apadrinar es una forma hermosa de ayudar de manera constante
              a nuestros peluditos 💙</p>
       
<div class="apadrinamiento-box">

    <div class="apadrinamiento-texto">
     <ul>
  <li><i class="bi bi-cash-coin"></i> Revisa tu presupuesto</li>
  <li><i class="bi bi-heart-fill"></i> Elige el peludito que deseas apadrinar</li>
  <li><i class="bi bi-credit-card"></i> Define la forma, el monto y la frecuencia de tu colaboración</li>
  <li><i class="bi bi-geo-alt"></i> Visita a tu ahijado</li>
  <li><i class="bi bi-bandaid"></i> Apoya su alimentación y cuidados médicos</li>
  <li><i class="bi bi-plus-circle"></i> Ayuda con gastos extras si está a tu alcance</li>
  <li><i class="bi bi-chat-heart"></i> Recibe actualizaciones de tu ahijado</li>
  <li><i class="bi bi-megaphone"></i> Ayuda a difundir el programa de apadrinamiento e inspira a otros con tu ejemplo</li>
</ul>


      <p class="mt-3">
        Si estás interesado en apadrinar, contáctanos:
      </p>

 <a 
  href="https://wa.me/573153954727?text=Hola%20
  %0AEstoy%20interesado(a)%20en%20el%20programa%20de%20apadrinamiento%20de%20Animalandia.
  %0AMe%20gustaría%20recibir%20más%20información,%20por%20favor.%0A¡Gracias!"
  class="btn-apadrinar"
  target="_blank"
  rel="noopener noreferrer"
>
  <i class="bi bi-whatsapp"></i> Quiero apadrinar
</a>

  </div>

  <div class="apadrinamiento-img">
    <img src="../../src/img/ayuda/apadrina2.png" alt="Apadrinamiento Animalandia">
  </div>

</div>
</div>






        <!-- VOLUNTARIADO -->
<div class="ayuda-section" id="voluntariado">

  <div class="voluntariado-card">

    <!-- TEXTO -->
    <div class="voluntariado-texto">
      <h3>Voluntariado 💙</h3>

      <p class="intro">
        Ser voluntario en Animalandia es regalar tiempo, amor y compañía
        a quienes más lo necesitan🐶🐱
      </p>

      <ul class="voluntariado-lista">
        <li><span>🤍</span> Apoyo en redes sociales y difusión</li>
        <li><span>🐕</span> Pasear, bañar y acompañar a los peluditos</li>
        <li><span>🏥</span> Apoyo en jornadas de adopción</li>
        <li><span>🦴</span> Ayuda en alimentación y cuidado diario</li>
        <li><span>📸</span> Fotografiar y promocionar adopciones</li>
      </ul>

      <p class="cierre">
        Si quieres hacer parte de esta hermosa labor:
      </p>

      <a 
        href="https://wa.me/573153954727?text=Hola%20💙🐾%0AQuiero%20ser%20voluntario(a)%20en%20Animalandia.%0AMe%20gustaría%20recibir%20más%20información.%0A¡Gracias!"
        class="btn-voluntario"
        target="_blank"
      >
        <i class="bi bi-whatsapp"></i> Quiero ser voluntario
      </a>
    </div>

    <!-- IMAGEN -->
    <div class="voluntariado-img">
      <img src="../../src/img/ayuda/voluntariado2.png" alt="Voluntariado Animalandia">
    </div>

  </div>
</div>





      <!-- AYUDA EN ESPECIE -->
<div class="ayuda-section" id="especie">
<h3 class="ayuda-titulo">Donación en especie</h3>

<p class="ayuda-descripcion">
  Los rescatados del refugio Animalandia necesitan de tu ayuda 🐶🐱  
  Estas son algunas de las donaciones que recibimos con amor:
</p>

<div class="especie-box">

  <!-- Insumos para sopas -->
  <div class="especie-card">
    <h4>🥣 Insumos para las sopas</h4>
    <ul>
      <li>Harina de trigo</li>
      <li>Lentejas</li>
      <li>Arroz</li>
      <li>Pastas</li>
      <li>Zanahoria</li>
      <li>Remolacha</li>
      <li>Espinaca</li>
      <li>Acelga</li>
      <li>Apio</li>
      <li>Brócoli</li>
      <li>Menudencias</li>
      <li>Hígados y mollejas</li>
      <li>Pajarilla</li>
      <li>Lagarto</li>
      <li>Huesos para sustancia</li>
      <li>Papa criolla</li>
      <li>Calabaza / Ahuyama</li>
      <li>Habichuela</li>
      <li>Pipa de gas</li>
    </ul>
  </div>

  <!-- Insumos de aseo -->
  <div class="especie-card">
    <h4>🧼 Insumos de aseo</h4>
    <ul>
      <li>Hipoclorito</li>
      <li>Jabón en polvo</li>
      <li>Fabuloso</li>
      <li>Jabón de losa</li>
      <li>Creolina</li>
      <li>Arena para gatos</li>
      <li>Esponjas</li>
      <li>Guantes</li>
      <li>Baldes</li>
      <li>Escobas</li>
      <li>Recogedores</li>
      <li>Trapeadores</li>
    </ul>
  </div>

</div>

<div class="especie-cta">
  <p>
    💙 Cada aporte, por pequeño que parezca, marca una gran diferencia.
  </p>

  <a 
    href="https://wa.me/573153954727?text=Hola%20Animalandia%20🐾%20quiero%20hacer%20una%20donación%20en%20especie%20y%20me%20gustaría%20coordinar%20la%20entrega."
    class="btn-especie"
    target="_blank"
  >
    📦 Quiero donar en especie
  </a>
</div>
</div>






    <!-- AYUDA EN ESPECIE -->
<div class="ayuda-section" id="difusion">

  <h3 class="ayuda-titulo">Difusión</h3>

  <p class="ayuda-descripcion">
    Compartir también salva vidas 🐾  
    Ayúdanos a llegar a más personas difundiendo nuestra labor, 
    nuestras campañas y las historias de nuestros rescatados.
  </p>

  <div class="difusion-box">

    <div class="difusion-texto">
      <ul>
        <li>📢 Comparte nuestras publicaciones en redes sociales</li>
        <li>🐶 Ayúdanos a encontrar hogares para nuestros peluditos</li>
        <li>💙 Difunde campañas de donación y apadrinamiento</li>
        <li>🌍 Permite que más personas conozcan Animalandia</li>
      </ul>

      <p class="mt-3 difusion-frase">
        Un clic, un compartir o un mensaje puede cambiar una vida.
      </p>
    </div>

    <div class="difusion-redes">

      <a href="https://www.facebook.com/share/17C7GF9pMG/"
         target="_blank"
         class="difusion-icon facebook">
        <i class="bi bi-facebook"></i>
        <span>Facebook</span>
      </a>

      <a href="https://www.instagram.com/animalandia.38/"
         target="_blank"
         class="difusion-icon instagram">
        <i class="bi bi-instagram"></i>
        <span>Instagram</span>
      </a>

      <a href="https://wa.me/573153954727?text=Hola%20Animalandia%20🐾%20quiero%20ayudar%20difundiendo%20su%20labor"
         target="_blank"
         class="difusion-icon whatsapp">
        <i class="bi bi-whatsapp"></i>
        <span>WhatsApp</span>
      </a>

    </div>

  </div>

</div>







        
</section>






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




<?php include("../../templates/pie_publico.php"); ?>
