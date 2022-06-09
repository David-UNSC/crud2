<html>
<head>
	<title>Nuevo</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	include("encabezado.php");
	require("conexion.php");
	if (isset($_POST['agregar']) && !empty($_POST['descripcion']) && !empty($_POST['precio'])) 
	{
		$descripcion=$_POST['descripcion'];
		$precio=$_POST['precio'];
		$fabricante=$_POST['fabricante'];
		$stock=$_POST['stock'];
		$sql="INSERT INTO productos VALUES(NULL,'$descripcion','$precio','$fabricante','$stock')";
		if (!$miconex->query($sql))
		 {
			die("No se puede insertar el Producto [".$miconex->error."]");
		}
		echo "Producto agregado con éxito".$miconex->affected_rows." fila(s) inseratada(s)";
	}
	?>
	<h2>Agregar Producto</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Descripcion <input type="text" name="descripcion"><br>
	Precio<input type="text" name="precio"><br>
	Fabricante
	<select name="fabricante">
		<?php
		$sql="SELECT * FROM fabricantes";
		$resultado=$miconex->query($sql);

		while ( $fila=$resultado->fetch_assoc())
		{
			echo "<option value=\"$fila[id]\">$fila[nombre]</option>";
		}	

		?>
	</select>
	<br/>
	Stock<input type="text" name="stock"><br/><br/>
	<input type="submit" name="agregar" value="Insertar"><br/>
	</form>
	<?php
	include ("pie.php");	
	?>
</body>
</html>