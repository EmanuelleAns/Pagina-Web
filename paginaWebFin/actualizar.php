<?php 
	echo "<form action=actualizado.php method=post>";
	echo "<br> <h2> Módulo para actualizar </h2>";

	echo "<input type='text' name='idR' placeholder='id' required='' ></br>";
	echo "<input type='text' name='art' placeholder='Nombre del Rapero' required='' ></br>";
	echo "<input type='text' name='can' placeholder='Canción' required='' ></br>";
	echo "<input type='text' name='lic' placeholder='Licencia' required='' ></br>";


	echo "<br><input type='submit' value=Actualizar></br>";
	echo "</form>";
?>