<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT id,nombre FROM fabricantes WHERE id='$id'";
	
	$resultado=$miconex->query($query);
	
	$fila=$resultado->fetch_assoc();
	
?>

<html>
	<head>
				<?php
	include("encabezado.php");	
	?>
	
		<title>fabricantes</title>
	</head>
	<body>
		
		<center><h1>Ver Fabricantes</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_fab.php">
			
			<table width="50%">
			<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Id</b></td>
					<td width="30"><input type="text" name="id" size="25" value="<?php echo $fila['id']; ?>" /></td>
				</tr>	
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>NOmbre</b></td>
					<td width="30"><input type="text" name="nombre" size="25" value="<?php echo $fila['nombre']; ?>" /></td>
				</tr>	
			

				<tr>
			<a href="fabricantes.php">Regresar</a>
				</tr>
			</table>
		</form>
			<?php
	include ("pie.php");	
	?>
	</body>

</html>	
