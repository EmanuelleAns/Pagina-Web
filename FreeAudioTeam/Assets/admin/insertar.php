<?php 
	echo "<form action=insertado.php method=post>";
	echo "<br> <h2> Módulo para insertar </h2>";

	echo "<input type='text' name='art' placeholder='Nombre del Rapero' required='' ></br>";
	echo "<input type='text' name='can' placeholder='Canción' required='' ></br>";
	echo "<input type='text' name='lic' placeholder='Licencia' required='' ></br>";


	echo "<br><input type='submit' value=Insertar></br>";
	echo "</form>";
?>