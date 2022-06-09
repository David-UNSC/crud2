<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];

	$query="UPDATE fabricantes SET nombre='$nombre' WHERE id='$id'";
	
	$resultado=$miconex->query($query);
	
?>

<html>
	<head>
					<?php
	include("encabezado.php");	
	?>
		<title>Editar Fabricante</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Editar Fabricante</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Editar Fabricante</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="fabricantes.php">Regresar</a>
			
		</center>
			<?php
	include ("pie.php");	
	?>
	</body>
</html>
				
				