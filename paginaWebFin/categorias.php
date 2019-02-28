<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>
  <meta charset="UTF-8">

 <link rel="stylesheet" type="text/css" href="css/estilos.css"><!--Vincular CSS-->
 <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
   
</head>
<body class="fondo">
    <!-----------------------------------------Header-------------------------------------->
   <header class="header" ><!--Definimos Clases-->

    <div class="contenedor">
        <img src="img/logo1.png" class="logo"><!--Logo Principal-->

        <span class="icon-menu" id="btn-menu"></span><!--Funciona para icono desplegable de menu-->
        <nav class="nav" id="nav">
        <ul class="menu"><!--Definir Botones grales-->
          
          <li class="menu__item"><a class="menu__link" href="file:///C:/xampp/htdocs/paginaWebFin/index.html">Inicio</a></li>

          <li class="menu__item"><a class="menu__link" href="file:///C:/xampp/htdocs/paginaWebFin/blog.html">BLOG</a></li>

          <li class="menu__item"><a class="menu__link" href="http://localhost/paginaWebFin/categorias.php">Categorias</a></li>

          <li class="menu__item"><a class="menu__link" href="file:///C:/xampp/htdocs/paginaWebFin/nosotros.html">Nosotros</a></li>

          <li class="menu__item"><a class="menu__link" href="file:///C:/xampp/htdocs/paginaWebFin/licencias.html">Licencias de Uso</a></li>

          <li class="menu__item"><a class="menu__link" href="file:///C:/xampp/htdocs/paginaWebFin/cuenta.html">Cuenta</a></li>

          <img src="img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>
  <!---------------------------------------------reproductor------------------------------------>
<dir><h2 class="reproductor__txt">Lista de Reproducción</h2></dir>
 
 <!------------------Base de datos---------------------->
<?php 

include "raperos.php";
$sentencia=$base_de_datos->query("SELECT * FROM  artistas;");
$rapero=$sentencia->fetchAll(PDO::FETCH_OBJ);

?>
  <div class="tabla">
   <table border="1" class="tabla__fondo">
    <tr>
      <th>No.</th>
      <th>Artista</th>
      <th>Canción</th>
      <th>Licencia de Uso</th>
      <th>Reproducción</th>

    <?php foreach ($rapero as $p) {?>
    <tr>
      <td><?php echo $p->id ?></td>
      <td><?php echo $p->artista ?></td>
      <td><?php echo $p->cancion ?></td>
      <td><?php echo $p->licencia ?></td>
      <td><?php echo $p->reproduccion ?></td>
    </tr>
     </div>
    
  <?php } ?>
  </body>


  

 <script src="js/menu.js"></script> <!--enlace con javaScript--> 
   
</html>