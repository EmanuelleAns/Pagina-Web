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
   













 <meta charset="UTF-8">

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/estilos.css"><!--Vincular CSS-->


 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="<?php echo base_url(); ?>Assets/js/jquery.scrollUp.js"></script>
 <script>$(function(){$.scrollUp({scrollImg: true});});</script> 
 <!-- Funcion de boton -->

 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/main.css"><!-- Vincular para boton -->
 <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/cssBootstrap/bootstrap.min.css">
        
        
 <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

  <style type="text/css">a:link{text-decoration:none;}</style>

    
   
</head>
<body class="fondo_cuenta">
    <!-----------------------------------------Header-------------------------------------->
    <header class="header"><!--Definimos Clases-->

    <div class="contenedor">
        <img src="<?php echo base_url(); ?>Assets/img/logo1.png" class="logo"><!--Logo Principal-->

        <span class="icon-menu" id="btn-menu"></span><!--Funciona para icono desplegable de menu-->
        <nav class="nav" id="nav">
        <ul class="menu"><!--Definir Botones grales-->
          
          <li class="menu__item"><a class="menu__link" href="inicio">Inicio</a></li>

          <li class="menu__item"><a class="menu__link" href="blog">BLOG</a></li>

          <li class="menu__item"><a class="menu__link" href="Categorias">Categorías</a></li>

          <li class="menu__item"><a class="menu__link" href="nosotros">Nosotros</a></li>

          <li class="menu__item"><a class="menu__link" href="licencias">Licencias de Uso</a></li>

          <li class="menu__item"><a class="menu__link" href="cuentas">Cuentas</a></li>

          <img src="<?php echo base_url(); ?>Assets/img/user.jpg" class="logoUser">        
        </ul>
        </nav>
        </div>
      </header>
       <div class="banner" class="contenedor"><br><br><br><br><h1 class="banner__descripcion">Cuentas</h1></div>

      <div class="container-fluid bg-primary py-2 text-center">  
<h1 class="display-1"><b>Inicio de Sesión.</b></h1></div>

  <div class="text-center">
   <img src="<?php echo base_url(); ?>Assets/img/user.png" class="img-fluid py-1">
</div>


       

   <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>
    <div class="pos">
    <div class="main">
     <form action="" id="formLg">
      <small><b>USUARIO:</b></small>
        <input type="text" name="usuariolg"  placeholder="Usuario" required>
      <small><b>CONTRASEÑA:</b></small>
        <input type="password" name="passlg"  placeholder="Contraseña" required>
        <input type="submit" class="botonlg"  value="Iniciar Sesion" >
        <br><br><br><br><br>
        <input type="button"value="Crear Cuenta">
     </form>
    </div></div>
  
      <footer><div class="contenedor">
              <p class="copy">FreeAudioTeam &copy; 2019</p><div class="sociales">
              <a href="https://es-la.facebook.com/"><img src="<?php echo base_url(); ?>Assets/img/icono1.png" alt=""></a>    
              <a href="https://twitter.com/?lang=es"><img src="<?php echo base_url(); ?>Assets/img/icono2.png"></a>
              <a href="https://www.instagram.com/?hl=es-la"><img src="<?php echo base_url(); ?>Assets/img/icono3.png"></a>
              <a href="https://www.youtube.com/"><img src="<?php echo base_url(); ?>Assets/img/icono4.png"></a> </div></div></footer>
              

 <script src="<?php echo base_url(); ?>Assets/js/menu.js"></script> 
 <script src="<?php echo base_url(); ?>Assets/js/main.js"></script>

</html>