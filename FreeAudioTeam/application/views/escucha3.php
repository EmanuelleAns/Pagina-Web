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
<body class="fondo_inicio">
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

          <li class="menu__item"><a class="menu__link" href="cuentas">Cuentas</a></li>

          <img src="<?php echo base_url(); ?>Assets/img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>

      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Eptos Uno</h1></div>

      <h3 class="noticias">Género hip hop.</h3>

      <img src="<?php echo base_url(); ?>Assets/img/new3.jpg" class="noticia_img">

      <P class="noticia_p1">West Gold ft. Eptos Uno "Acapulco Golden"
        Los West Gold siguen colaborando con los duros del género, esta vez Eptos  se une con los de Guadalajara para el video Acapulco Golden #ponleplay
        El hip hop en México a tenido a grandes exponentes fuera de la capital, incluso me atrevería a decir que a sus mas grandes exponentes del género, tales como lo fueron y siguen siendo Control machete de Monterrey, o en la actualidad La banda Bastón de la Baja sur, o el mismo Eptos Uno desde Obregón Sonora, Esta vez no fue la excepción desde Guadalajara llego la West Gold a reventar las bocinas del salón Bolívar con ese Hip hop fresco influenciado por el G-funk y el hip hop de la West Coast que los caracteriza.

¡Súbele y disfrútalo!
</P>
      <audio class="escucha" controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica13.mp3" type="audio/mp3"></div></audio>
      



     <br><br><br><br><br> <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
              
 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 
   
</html>