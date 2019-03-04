<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>
  <meta charset="UTF-8">
  <title>Categorias</title>

 <link rel="stylesheet" type="text/css" href="css/estilos.css"><!--Vincular CSS-->
 <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
   
</head>
<body class="fondo">
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

      <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Categorías</h1></div>

  <!-------------------------------------  php   ------------------------>

    <div class="tabla"><table border="1" class="tabla__fondo">
    <tr>
      <th>No.</th>
      <th>Artista</th>
      <th>Canción</th>
      <th>Licencia de Uso</th>
      <th>Reproducción</th>
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
    </tr>

  <?php } 
  ?>   
</div></body>

  <footer class="pie"><div class="contenedor">
              <p class="copy" ">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="img/icono4.png"></a> </div></div></footer>


 <script src="js/menu.js"></script> <!--enlace con javaScript--> 

</html>
    

  