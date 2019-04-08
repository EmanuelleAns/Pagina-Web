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
      
      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Gera MXM</h1></div>

      <h3 class="noticia">Género hip hop.</h3>

      <img src="<?php echo base_url(); ?>Assets/img/imagen1.jpg" class="noticia_img">

      <P class="noticia_p">El rap es un deporte que consiste en crear mitologías personales. Haces un personaje (que eres tú mismo pero en el micrófono) y con él conectas con la gente. El chiste es que alguien se vea reflejado en ti, en lo que dices, lo que "representas". Mientras más gente convoques, no necesariamente mejor rapero (¿qué es eso?), pero sí mejor cumplida tu función dentro de la sociedad. Y no vamos a decir que esta es generar consciencia o llevar un mensaje o esparcir el amor y la buena vibra, pero sí, al menos, formar parte de un diáologo público. Charles Ans y Gera MXM son quienes mejor cumplen esta función en el rap mexicano actual.</P>
      <P class="noticia_p2">Borra el tiempo, tira todo lo que te recuerde a mí, las fotos que te tomé, las cartas que te escribí. Nada es suficiente como tus grandes abrigos, como tus aretes caros, la fiesta con tus amigos. –”Nunca te pude alcanzar”.</P>
      <P class="noticia_p3">Mis letras bailan por el humo en el alambre, y ayer prometí a la abuela no volver a llegar tarde. Y que ironía que ahora pidan que me calme y cuando subo al escenario mis fracasos los aplauden. –”Dos caras”.</P>
      <P class="noticia_p4">Cuándo y por dónde, dime lo perdimos, las ganas, los besos, todo lo que fuimos. La noche pregunta que dónde dormimos. Me pinto otra raya, te canto dolido y claro que me duele y nada me lo cura el tiempo. –”Me toca perder”.</P>



      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
              
 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 
   
</html>