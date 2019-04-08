<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>

	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/estilos.css"><!--Vincular CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/cssBootstrap/bootstrap.min.css"> <!--BOOTSTRAP CSS -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/main.css"><!-- Vincular para boton -->


    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.scrollUp.js"></script> 
    <script>$(function(){$.scrollUp({scrollImg: true});});</script> 
    <!-- Funcion de boton -->
    

    <style type="text/css">a:link{text-decoration:none;}</style><!--Quitar decoracion de subrayado-->
   

</head>
<body class="fondo_blog">
    <!-------------------------------Header-------------------------------------->
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

<div class="banner" ><br><br><h1 class="banner__descripcion">BLOG</h1></div><br><br>

    <div class="container-fluid bg-danger py-2">  
      <h1 class="display-1"><b>Descubre nuestro 
amplio catálogo.</b></h1>  <!-- CLASE DE BOOTSTRAP -->
      <p class="lead"><b>Toda la música que encontrarás en FreeAudioTeam es música libre de derechos de autor o royalty free.!</b></p>
    </div>


    <body>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url(); ?>Assets/img/blog1.png" alt="Los Angeles">
      <div class="carousel-caption">  
      <h1>¿Sólo ondas?</h1>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>Assets/img/blog2.jpg" alt="Chicago">
      <div class="carousel-caption">  
      <h1>Vida/Muerte</h1>
      </div>

    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>Assets/img/blog3.jpg" alt="New York">
      <div class="carousel-caption">  
      <h1>Música</h1>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>Assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url(); ?>Assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>Assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>


      <div class="container-fluid bg-warning py-2 text-center">  
      <h1 class="display-1"><b>ÚLTIMAS NOTICIAS</b></h1>
    </div>


<div class="container-fluid bg-primary">
  <div class="row">
    <div class="col-sm-12 col-md-6 ">
      <h1 class="display-5"><b>Freestyle, públicos y estigmatización en el hip hop: Serko Fu</b></h1>
        <p>Hablar de Serko Fu en el contexto del hip hop mexicano es hablar de una institución. El papá de los pollitos. Maestro Yoda del palabrerío. Almacén de sabiduría ancestral. Testigo y protagonista de primera fila. Quien estuvo ahí antes que pocos. Pionero dentro de lo que la palabra permite. Como dice en "Dígitos", "sigue en el juego, pero no es olímpico, tiene medallas, pero no son de tae kwon do".
          </p>
 <img src="<?php echo base_url(); ?>Assets/img/noticiaBlog.jpg" class="img-fluid py-3">

        </div>

    <div class="col-sm-12 col-md-6 ">
      <h1 class="display-5"><b>'Istmo' paga una deuda que tenía con el rap: Dano</b></h1>
        <p>Rap francés, Mercedes y Rottweilers”. “Fast life antes de morir, pausa: rap honoris causa”. “Entendedor de un viejo argot de gente pobre”. “El fiel seguidor de Mobb Deep antes de que le diese una embolia cerebral de Havoc”. Apenas han pasado diez minutos de Istmo, el álbum que publicó en febrero Dano (rapero y productor argentino radicado desde niño en España) y sus letras de asociación libre no dejan de presentar códigos y knowledge: este es un disco estrictamente de rap.</p>

      <img src="<?php echo base_url(); ?>Assets/img/noticiaBlog2.jpg" class="img-fluid py-5">
      </div></div></div>
      

      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>

             



  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
<script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 
</html>
   