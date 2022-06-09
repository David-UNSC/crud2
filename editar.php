
<html>
<head>
	<title>Editar</title>
	<meta charset="utf-8">
	<?php
		require('conexion.php');
	
?>
</head>

<body>
	<?php
	include("encabezado.php");

	if (isset($_POST['actualizar'])) 
	{
		if (!empty($_POST['descripcion']) && !empty($_POST['precio'])) 
		{
			
		$id=$_POST['id'];
		$descripcion=$_POST['descripcion'];
		$precio=$_POST['precio'];
		$fabricante=$_POST['fabricante'];
		$stock=$_POST['stock'];
		$sql="UPDATE productos SET descripcion='$descripcion', precio='$precio', fabricante='$fabricante', stock='$stock' WHERE id='$id'";
		if (!$miconex->query($sql))
		 {
			die("No se pudo actualizar el Producto [".$miconex->error."]");
		}
		echo "Producto actualizado con éxito".$miconex->affected_rows." fila(s) actualizada(s)";
		header('location:productos.php');

		}
		else
		{
			echo "Complete los datos obligatorios";
		}
	}
	else
	{
		$id=$_GET['id'];
		$consulta="SELECT * FROM productos WHERE id=$id";
		if (!$resultado=$miconex->query($consulta)) 
		{
			die("Ocurrió un error en la consulta [".$miconex->error."]");
		}
		if ($prod=$resultado->fetch_assoc()) 
		{
	?>
		
	<h2>Editar Producto</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="id" value="<?php echo $prod['id'] ?>"><br/>
	Descripcion<input type="text" name="descripcion" value="<?php echo $prod['descripcion']?>"><br/>
	Precio<input type="text" name="precio" value="<?php echo $prod['precio']?>"><br/>
	Fabricante
	<select name="fabricante">
		<?php
		$sql="SELECT * FROM fabricantes";
		$resultado=$miconex->query($sql);

		while ( $fila=$resultado->fetch_assoc())
		{
			if ($prod['fabricante']==$fila['id']) 
			
				echo "<option value=\"$fila[id]\" selected>$fila[nombre]</option>";
			
			else
			echo "<option value=\"$fila[id]\">$fila[nombre]</option>";
		}	

		?>

	</select>
	<br/>
	Stock<input type="text" name="stock" value="<?php echo $prod['stock'] ?>"><br/><br/>
	<input type="submit" name="actualizar" value="Insertar"><br/>
	</form>
	<?php
	}
	else
		echo "No existe este producto";
	}
	include ("pie.php");	
	?>
</body>
</html>