<!DOCTYPE html>
<html lang="es"><!--Definimos Idioma-->
<head>
  <meta charset="UTF-8">

 <link rel="stylesheet" type="text/css" href="css/estilos.css"><!--Vincular CSS-->

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.scrollUp.js"></script>

        <link rel="stylesheet" href="css/main.css"><!-- Vincular para boton -->
        <script>$(function(){$.scrollUp({scrollImg: true});});</script> <!-- Funcion de boton -->
        
 <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
      <!--Usamos estilos-->
   
</head>
<body class="fondo_cuenta">
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
       <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Cuenta</h1></div>
       <img src="img/user.png" class="noticia_img">
<?php
  include_once("raperos.php");
?>

<div class="login">
 <h1>Iniciar Sesion</h1>
<form  method=post>

<br><input type='text' name=autor placeholder=Nombre required=""></br>
<br><input name=cor type='email' placeholder=Correo required=""></br>
<br><input type='submit'value=Iniciar ></br>
</form> </div>

<?php
if(isset($_POST['autor'])&& isset($_POST['cor'])){
$nom=$_POST['autor'];
$correo=$_POST['cor'];

 try{
$sentencia=$base_de_datos->prepare("INSERT INTO login (nombre,correo,fecha) VALUES ('$nom','$correo',NOW())");

$personas=$sentencia->execute();

if($personas){
echo "<br>Sesion Iniciada";
}
}
catch(Exception $e){
echo "<br>Ocurrio algo con la base de datos:".$e->getMessage();
}
}
?>

      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="img/icono4.png"></a> </div></div></footer>
              
 <script src="js/menu.js"></script> <!--enlace con javaScript--> 
   
</html>