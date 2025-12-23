<?php
include("templates/cabecera.php");

if (isset($_GET['pagina'])) {
    include("secciones/publicas/" . $_GET['pagina'] . ".php");
} else {
    include("secciones/publicas/inicio.php");
}

include("templates/pie.php");
