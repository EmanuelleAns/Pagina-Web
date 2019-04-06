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
          
          <li class="menu__item"><a class="menu__link" href="FreeAudioTeam/index">Inicio</a></li>

          <li class="menu__item"><a class="menu__link" href="FreeAudioTeam/blog">BLOG</a></li>

          <li class="menu__item"><a class="menu__link" href="FreeAudioTeam/categorias">Categorías</a></li>

          <li class="menu__item"><a class="menu__link" href="FreeAudioTeam/nosotros">Nosotros</a></li>

          <li class="menu__item"><a class="menu__link" href="FreeAudioTeam/licencias">Licencias de Uso</a></li>

          <li class="menu__item"><a class="menu__link" href="FreeAudioTeam/cuenta">Cuenta</a></li>

          <img src="<?php echo base_url(); ?>Assets/img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>

      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Eptos Uno</h1></div>

      <h3 class="noticia">Género hip hop.</h3>

      <img src="<?php echo base_url(); ?>Assets/img/imagen2.jpg" class="noticia_img">

      <P class="noticia_p">Si de rap mexicano hablamos, uno de sus más dignos representantes es Eptos Uno. El MC de Obregón, Sonora, no sólo le hace honor a sus raíces norestenses. Su freestyle está compuesto por un amplio vocabulario y tintes de inglés utilizados con precisión. Muchos dicen que es un rapero nuevo, pero Antonio Lara – “Tony” para los compas-, lleva ya siete discos independientes y Hacer historia el album de estudio que lanzó bajo el sello de Universal Music Group.</P>
      <P class="noticia_p2">No tengo miedo de ser yo y ver hacia arriba, si dejé todo atrás es que no tuve alternativa.</P>
      <P class="noticia_p3">Homie no confundas las cosas, No creas que tu ves lo que yo ,En mi barrio, hay más espinas que rosas, Demonios que usan la seducción.</P>
      <P class="noticia_p4">Improvisate un futuro si ti vida es un freestyle.</P>



      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
              
 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 
   
</html>