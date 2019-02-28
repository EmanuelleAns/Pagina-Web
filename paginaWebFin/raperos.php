<?php 
$contraseña="";
$usuario="root";
$nombre_BD="webFin";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname='.$nombre_BD,$usuario,$contraseña);
	echo"<br><br><br><br><br><br><br><br>";
	

}catch(Exception $e){
	echo"Ocurrió algo con la base de datos:" .$e->getMessage();
}

?>