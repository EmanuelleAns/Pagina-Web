<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

<title>Categorias</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/estilos.css"><!--Vincular CSS-->
 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/main.css"><!-- Vincular para boton -->
 <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
        
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>$(function(){$.scrollUp({scrollImg: true});});</script> 
<!-- Funcion de boton -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/jquery.scrollUp.js"></script>

   
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

          <li class="menu__item"><a class="menu__link" href="cuenta">Cuenta</a></li>

          <img src="<?php echo base_url(); ?>Assets/img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>

      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Categorías</h1></div>

  <!-------------------------------------  php   ------------------------>

    <div class="tabla"><table border="1" class="tabla__fondo">
    <tr>
      <th>No.</th>
      <th>Artista</th>
      <th>Canción</th>
      <th>Licencia de Uso</th>
      <th>Reproducción</th>
      <th>Descarga</th>
    </tr>

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
      <td><?php echo $p->descarga ?></td>
    </tr>

  <?php } 
  ?>   
</div></body>

  <footer class="pie"><div class="contenedor">
              <p class="copy" ">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>


 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> <!--enlace con javaScript--> 

</html>
    

  