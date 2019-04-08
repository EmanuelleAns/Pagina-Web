<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Categorias</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/estilos.css"><!--Vincular CSS-->


 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/main.css"><!-- Vincular para boton -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/cssBootstrap/bootstrap.min.css"> <!--BOOTSTRAP CSS -->

 <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
        
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>$(function(){$.scrollUp({scrollImg: true});});</script> 
<!-- Funcion de boton -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/jquery.scrollUp.js"></script>
<style type="text/css">a:link{text-decoration:none;}</style>

   
</head>
<body class="fondo">
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

      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Categorías</h1></div>

  <!-------------------------------------  php   ------------------------>
  
  <div class="table-container text-white">
    <table border="1" class="table-rwd">
    <tr>
      <th>No.</th>
      <th>Artista</th>
      <th>Canción</th>
      <th>Licencia de Uso</th>
      <th>Reproducción</th>
      <th>Descarga</th>
    </tr>

    <tr>
      <th scope="row">1</th>
      <td>Charles Ans</td>
      <td>Petalos</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica1.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica1.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <td>Eptos Uno</td>
      <td>Un Momento</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica2.mp3" type="audio/mpeg" ></audio></td>

      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica1.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Gera MXM</td>
      <td>Mi templo</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica3.mp3" type="audio/mpeg" ></audio></td>

      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica3.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>

     <tr>
      <th scope="row">4</th>
      <td>Rels B</td>
      <td>Es mejor</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica4.mp3" type="audio/mpeg" ></audio></td>

      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica4.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>

     <tr>
      <th scope="row">5</th>
      <td>Canserbero</td>
      <td>Pensando en ti</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica5.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica5.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>La banda Baston</td>
      <td>Solo como amigos</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica6.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica6.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>Cartel de santa</td>
      <td>El dolor de la micro</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica7.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica7.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>Ice cube</td>
      <td>It was a good day</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica8.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica8.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">9</th>
      <td>2Pac</td>
      <td>Ghetto gospel</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica9.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica9.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">10</th>
      <td>Snoop dogg</td>
      <td>Drop it like it's hot</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica10.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica10.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">11</th>
      <td>Bob marley</td>
      <td>Is this love</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica11.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica11.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">12</th>
      <td>Gera MXM</td>
      <td>La calle que me gusta</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica12.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica12.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">13</th>
      <td>Eptos Uno</td>
      <td>Acapulco golden</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica13.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica13.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">14</th>
      <td>Charles Ans</td>
      <td>Cafe</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica14.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica14.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">15</th>
      <td>Rels B</td>
      <td>Baila Mas</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica15.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica15.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">16</th>
      <td>Canserbero</td>
      <td>Es epico</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica16.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica16.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">17</th>
      <td>Cartel de santa</td>
      <td>La pelotona</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica17.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica17.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">18</th>
      <td>Bob marley</td>
      <td>Three little birds</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica18.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica18.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
     <tr>
      <th scope="row">19</th>
      <td>Charles Ans</td>
      <td>No hay palabras bonitas</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor1"><source src="<?php echo base_url(); ?>Assets/musica/musica19.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica19.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga.png"></a></td>
    </tr>
     <tr>
      <th scope="row">20</th>
      <td>Charles Ans</td>
      <td>Corazon bohemio</td>
      <td>Free Audio Team</td>
      <td><audio controls class="reproductor2"><source src="<?php echo base_url(); ?>Assets/musica/musica20.mp3" type="audio/mpeg" ></audio></td>
      <td><a download href="<?php echo base_url(); ?>Assets/musica/musica20.mp3"><img src="<?php echo base_url(); ?>Assets/img/descarga2.png"></a></td>
    </tr>
<!-- 
<?php 
include "raperos.php";
$sentencia=$base_de_datos->query("SELECT * FROM  artistas;");
$rapero=$sentencia->fetchAll(PDO::FETCH_OBJ);
?> 
    <?php foreach ($rapero as $p) {?>
    <tr>
      <td><?php echo $p->id ?></td>
      <td><?php echo $p->artista ?></td>
      <td><?php echo $p->cancion ?></td>
      <td><?php echo $p->licencia ?></td>
      <td><?php echo $p->reproduccion ?></td>
      <a href="<?php echo base_url(); ?>Assets/img"><td><?php echo $p->descarga ?></td></a>
    </tr>

  <?php } 
  ?>   
 -->
</div></body>

  <footer class="pie"><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 

</html>
    

  