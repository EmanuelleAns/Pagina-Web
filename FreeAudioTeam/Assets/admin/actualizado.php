<?php 
	$id=$_POST['idR'];
	$artista=$_POST['art'];
	$cancion=$_POST['can'];
	$licencia=$_POST['lic'];


	include_Once "raperos.php";
	try{
		$sentencia=$base_de_datos->prepare("UPDATE artistas SET artista='$artista',cancion='$cancion',licencia='$licencia' WHERE id='$id'");
		$raperos=$sentencia->execute();

		if($raperos){
			echo "<br>Actualizado";
		}
	}
	catch(Exception $e){
		echo"<br> Ocurrio algo con la base de datos: ".$e->getMessage();
	}

?>