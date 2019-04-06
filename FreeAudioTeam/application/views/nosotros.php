<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>
	<meta charset="UTF-8">

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/estilos.css"><!--Vincular CSS-->

       <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/jquery.scrollUp.js"></script>

        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/main.css"><!-- Vincular para boton -->
        <script>$(function(){$.scrollUp({scrollImg: true});});</script> <!-- Funcion de boton -->
        
 <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
   
</head>
<body class="fondo_nosotros">
    <!-----------------------------------------Header-------------------------------------->
  <header class="header"><!--Definimos Clases-->

    <div class="contenedor">
        <img src="<?php echo base_url(); ?>Assets/img/logo1.png" class="logo"><!--Logo Principal-->

        <span class="icon-menu" id="btn-menu"></span><!--Funciona para icono desplegable de menu-->
        <nav class="nav" id="nav">
        <ul class="menu"><!--Definir Botones grales-->
          
          <li class="menu__item"><a class="menu__link" href="inicio">Inicio</a></li>

          <li class="menu__item"><a class="menu__link" href="blog">BLOG</a></li>

          <li class="menu__item"><a class="menu__link" href="categorias">Categorías</a></li>

          <li class="menu__item"><a class="menu__link" href="nosotros">Nosotros</a></li>

          <li class="menu__item"><a class="menu__link" href="licencias">Licencias de Uso</a></li>

          <li class="menu__item"><a class="menu__link" href="cuenta">Cuenta</a></li>

          <img src="<?php echo base_url(); ?>Assets/img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>
       <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Nosotros</h1></div>

            <img src="<?php echo base_url(); ?>Assets/img/nosotros.jpg" alt"" title="" >
        <div class="contenedor">
        <div class="banner__descripcion" >
          <h1 class="contenedor">#FreeAudioTeam</h1> <!--Titulo Principal-->
          <p class="contenedor">Escoge la música que mejor se adapte a tu proyecto.
          </p><!--Descripción-->
  </div>
  </div>
<br>
  <p class="nostrosP">La música de tu próximo proyecto está en FreeAudioTeam.

Contamos con un catálogo online donde hemos recogido más de 500 temas musicales de alta calidad pensados tanto para acompañar proyectos audiovisuales como para ambientar locales comerciales.

Desde México trabajamos de la mano de más de 50 músicos, ubicados en todo el mundo, para proporcionarte la mayor variedad de temas originales siempre libres de derechos.
</p>

  <br>
 <p class="nostrosP2">FreeAudioTeam somos una empresa especializada en la venta de música de librería libre de derechos de autor. Tenemos un gran catálogo de música para videos de toda clase, música para videos de boda, videos corporativos, videos documentales.

Tenemos una gran cantidad de músicos que componen para nuestra empresa.

Aquí encontrarás un gran número de material para crear tus  producciones de cine, Tv, o videos .

Nuestra web se encuentra perfectamente clasificada por categorías para que puedas encontrar la pieza musical que necesitas de una forma rápida y fácil.
</p>

<p class="nostrosP3">Nuestros autores, componen música libre de derechos de autor para que tengas la música que necesitas en tus videos.

¡No hay letra pequeña!.</p>


   <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
</body>

              
 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 
   
</html>