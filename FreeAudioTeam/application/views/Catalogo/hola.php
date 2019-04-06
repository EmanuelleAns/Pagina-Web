<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border=1>
		<tr>
			<th>ID</th>
			<th>NOMRE</th>
			<th>APELLIDOS</th>
			<th>EDAD</th>
		</tr>
		<?php foreach ($datitos as $p) { ?>
		<tr>
			<td><?php echo $p->ID ?></td>
			<td><?php echo $p->NOMRE ?></td>
			<td><?php echo $p->APELLIDOS ?></td>
			<td><?php echo $p->EDAD ?></td>
		</tr>	
		<?php } ?>
</body>
</html>