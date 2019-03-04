<?php 
	$artista=$_POST['art'];
	$cancion=$_POST['can'];
	$licencia=$_POST['lic'];


	include_Once "raperos.php";
	try{
		$sentencia=$base_de_datos->prepare("INSERT INTO artistas(artista,cancion,licencia) values ('$artista','$cancion','$licencia')");
		$raperos=$sentencia->execute();

		if($raperos){
			echo "<br>Insertado";
		}
	}
	catch(Exception $e){
		echo"<br> Ocurrio algo con la base de datos: ".$e->getMessage();
	}

?>