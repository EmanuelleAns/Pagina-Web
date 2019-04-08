<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>$(function(){$.scrollUp({scrollImg: true});});</script> 
  <!-- Funcion de boton -->
  <script src="<?php echo base_url(); ?>Assets/js/jquery.scrollUp.js"></script>


 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/estilos.css">
 <!--Vincular CSS-->
 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/main.css"><!-- Vincular para boton -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/cssBootstrap/bootstrap.min.css"> 

 <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">

     
 <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

 <style type="text/css">a:link{text-decoration:none;}</style>
 <!--Quitar decoracion de subrayado-->
   
</head>
<body class="fondo_inicio">
    <!--------------------Header-------------------------------------->
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

          <li class="menu__item"><a class="menu__link" href="cuentas">Cuentas</a></li>

          <img src="<?php echo base_url(); ?>Assets/img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>

<div class="container-fluid bg-primary py-5">
      <div class="container text-white">
        <h1 class="display-3"><b>Bienvenido Administrador.</b></h1>
        <p class="lead">
          Puedes editar la página a tu gusto, diviertete.
        </p>
      </div>
    </div>



   
        
      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
</body>
     
  <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> 
</html>
   