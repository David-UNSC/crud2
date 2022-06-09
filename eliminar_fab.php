<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM fabricantes WHERE id='$id'";
	
	$resultado=$miconex->query($query);
	
?>

<html>
	<head>
	
		<title>Eliminar Fabricantes</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Fabricante Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Fabricante</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="fabricantes.php">Regresar</a>
			
		</center>
	</body>
		<?php
	include ("pie.php");	
	?>
</html>