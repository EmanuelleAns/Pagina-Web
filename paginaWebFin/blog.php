<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>
  <meta charset="UTF-8">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilos.css"><!--Vincular CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style type="text/css">a:link{text-decoration:none;}</style><!--Quitar decoracion de subrayado-->

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        


        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
   
</head>
<body class="fondo_blog">
    <!-----------------------------------------Header-------------------------------------->
    <header class="header"><!--Definimos Clases-->

    <div class="contenedor">
        <img src="img/logo1.png" class="logo"><!--Logo Principal-->

        <span class="icon-menu" id="btn-menu"></span><!--Funciona para icono desplegable de menu-->
        <nav class="nav" id="nav">
        <ul class="menu"><!--Definir Botones grales-->
          
          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/index.php">Inicio</a></li>

          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/blog.php">BLOG</a></li>

          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/categorias.php">Categorías</a></li>

          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/nosotros.php">Nosotros</a></li>

          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/licencias.php">Licencias de Uso</a></li>

          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/cuenta.php">Cuenta</a></li>

          <img src="img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>
      <div class="banner" ><br><br><h1 class="banner__descripcion">BLOG</h1></div><br><br>

      

    <body>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/blog1.png" alt="Los Angeles">
      <div class="carousel-caption">  
      <h1>¿Sólo ondas?</h1>
      </div>
    </div>

    <div class="item">
      <img src="img/blog2.jpg" alt="Chicago">
      <div class="carousel-caption">  
      <h1>Vida/Muerte</h1>
      </div>

    </div>

    <div class="item">
      <img src="img/blog3.jpg" alt="New York">
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

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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
</body>
<!---------------------Pie de pagina--------------------------->
  
  <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="img/icono4.png"></a> </div></div></footer>

 <script src="js/menu.js"></script> <!--enlace con javaScript--> 
</html>

