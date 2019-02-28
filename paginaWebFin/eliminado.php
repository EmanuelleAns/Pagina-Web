<?php 
	$artista=$_POST['art'];

	include_Once "raperos.php";
	try{
		$sentencia=$base_de_datos->prepare("delete from artistas where artista='$artista'");
		$raperos=$sentencia->execute();

		if($raperos){
			echo "<br>Eliminado";
		}
	}
	catch(Exception $e){
		echo"<br> Ocurrio algo con la base de datos: ".$e->getMessage();
	}

?>