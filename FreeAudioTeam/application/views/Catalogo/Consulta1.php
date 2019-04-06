<!DOCTYPE html>
<head>
	<title>Consulta</title>
</head>
<body>
	<table border=1>
		<tr>
			<th>ID</th>
			<th>NOMRE</th>
			<th>APELLIDOS</th>
			<th>EDAD</th>
		</tr>
		<?php foreach ($datos as $p) { ?>
		<tr>
			<td><?php echo $p->id ?></td>
			<td><?php echo $p->nombre ?></td>
			<td><?php echo $p->licencia ?></td>
			<td><?php echo $p->cancion ?></td>
		</tr>	
		<?php } ?>
</body>
