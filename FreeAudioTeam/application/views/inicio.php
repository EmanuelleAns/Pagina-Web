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
      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Inicio</h1></div>
    <!-----------------------------------------Banner-------------------------------------->
    
        <div class="banner"> <!--Definimos clase (contenedor para alinar a todas)--> 

            <img src="<?php echo base_url(); ?>Assets/img/fondo1.jpg" alt"" title="" >
        <div class="contenedor">
        <div class="banner__descripcion" >
          <h1 class="contenedor">#FreeAudioTeam</h1> <!--Titulo Principal-->
          <p class="contenedor">Escoge la música que mejor se adapte a tu proyecto.
          </p><!--Descripción-->
  </div>
  </div>
       
  <div class="slider__txt2"><!--Segunda Clase para slider-->
  <div class="contenedor">Tu música libre de derechos está en FreeAudioTeam.
  Puedes escuchar todo los temas de manera inmediata, descarga toda la música que quieras.
  </div><!--Texto debajo de slider-->

  </div>
  </div>

    <!-----------------------------------------Destino-------------------------------------->
    <main>
        
    <section class="destino">
      
        <div class="contenedor ">
           <h2 class="destino__titulo">Éxitos</h2> <!--Titulo principal de contenedor-->
           <p class="destino__txt">La música que necesitas en nuestro catálogo online con más 
          de 20.000 temas para tus proyectos.</p>


           <!--Descripcion del contenedor-->

        <div class="destino__columna"><!--Imagen de contenidos-->
           <img src="<?php echo base_url(); ?>Assets/img/imagen1.jpg" class="destino__img">
           <h3><a href="newIndex"> Gera MXM</a></h3>
          </div>

          <div class="destino__columna"><!--Imagen de contenidos-->
              <img src="<?php echo base_url(); ?>Assets/img/imagen2.jpg" alt="" class="destino__img">         
              <h3><a href="newIndex2">Eptos Uno</a></h3>               
          </div>

          <div class="destino__columna"><!--Imagen de contenidos-->
              <img src="<?php echo base_url(); ?>Assets/img/imagen3.jpg" alt="" class="destino__img">
              <h3><a href="newIndex3">CharlesAns</a></h3>
          </div>

          <div class="destino__columna"><!--Imagen de contenidos-->
              <img src="<?php echo base_url(); ?>Assets/img/imagen4.jpg" alt="" class="destino__img">
              <h3><a href="newIndex4">Rels B</a></h3>
          </div> 
        </section>   
        
        <!---------------------------------------Especial------------------------------------------->
        <section class="especial">

             <h3 class="programas__titulo">Álbumes más escuchados.</h3>

        <div class="contenedor">  
            <article class="especial__columna1">
            <img src="<?php echo base_url(); ?>Assets/img/new1.jpg" alt="" class="especial__img">
        <div class="informacion">
            <h3 class="especial__titulo">F*ckTodas menos la mía</h3>
            <p class="especial__txt">Borra el tiempo, tira todo lo que te recuerde a mí, las fotos que te tomé, las cartas que te escribí. Nada es suficiente como tus grandes abrigos. –”Nunca te pude alcanzar”.
            </p>
        <a href="escucha"><button class="button">Escuchar Ahora</button></a></div>
        </article>
        
        <article class="especial__columna2">
          <img src="<?php echo base_url(); ?>Assets/img/new2.jpg" alt="" class="especial__img">   
                  <div class="informacion">
                <h3 class="especial__titulo">Ataraxia</h3>
                <p class="especial__txt">Voy sin estribillos a kilómetros de casa, se juntan los problemas mientras las horas pasan. Yo me distraigo entre envases y bachas, y me siento mejor cuando la gente está borracha. –Todavía.
               </p>
                  <a href="escucha2"><button class="button">Escuchar Ahora</button></a></div>
                  
            </article>
            
              <article class="especial__columna3">
          <img src="<?php echo base_url(); ?>Assets/img/new3.jpg" alt="" class="especial__img">   
                  <div class="informacion">
                <h3 class="especial__titulo">West Gold ft. Eptos Uno</h3>
                <p class="especial__txt">En una vida próspera, una vida más íntima, donde más de una probó lo de ser mi víctima. Solo son síntomas de intimidad y vida, la vida no es pa’ llorar sino para bailar respira. –A paso lento.
               </p>
                  <a href="escucha3"><button class="button">Escuchar Ahora</button></a></div>
            </article>
            </div>
        </section>

        <!-----------------------------------Artistas---------------------------------->

        <section class="ofertas">
             <h3 class="ofertas__titulo">Más Artistas</h3>
        <div class="contenedor">
            <article class="ofertas__columna">
            <img src="<?php echo base_url(); ?>Assets/img/mas1.jpg" class="ofertas__img">
                <a href="art"><h4>Canserbero</h4></a>
            </article>

            <article class="ofertas__columna">
            <img src="<?php echo base_url(); ?>Assets/img/mas2.jpg" class="ofertas__img">
                <a href="art2"><h4 >La Banda Bastön</h4></a>
            </article>
            <article class="ofertas__columna">
            <img src="<?php echo base_url(); ?>Assets/img/mas3.jpg" class="ofertas__img">
                <a href="art3"><h4 >Cartel de Santa</h4></a>
            </article>
            <article class="ofertas__columna">
            <img src="<?php echo base_url(); ?>Assets/img/mas4.jpg" class="ofertas__img">
               <a href="art4"><h4 >Ice cube</h4></a>
            </article>
            <article class="ofertas__columna">
            <img src="<?php echo base_url(); ?>Assets/img/mas5.jpg" class="ofertas__img">
                <a href="art5"><h4 >2 Pac</h4></a>
            </article>
            <article class="ofertas__columna">
            <img src="<?php echo base_url(); ?>Assets/img/mas6.png" class="ofertas__img">
                <a href="art6"><h4 >Snoop dogg</h4></a>
            </article>
            
            </div>
        </section>
        
        <section class="fondo">
        <div class="contenedor">
            <article class="info__fondo">
            <img src="<?php echo base_url(); ?>Assets/img/masfin.png" alt="" class="fondo__img">
              <h5 class="fondo__titulo">Bob Marley</h5>
                <p class="fondo__txt">¡El amor que pudo morir, no era amor!</p>
            </article>
            
            </div>
        
        </section>
    </main>
        
      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
</body>
     
  <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> 
  <!--enlace con javaScript--> 
   
</html>
   