<html>
<head>
	<title>Fabricantes</title>
</head>
<body>
	<?php include("encabezado.php");
		require("conexion.php");
		if (isset($_POST['agregar']) && !empty($_POST['nombre'])) 
		{
			$nombre=$_POST['nombre'];
			$sql="INSERT INTO fabricantes VALUES (NULL,'$nombre')";
			if (!$miconex->query($sql)) 
			{
				die("No se pudo insertar el fabricante [".$miconex->error."]");
			}
			echo "Fabricane agregado con exito. ".$miconex->affected_rows." fila(s) insertada(s)";			
		}
	?>
	<!--formulario para agregar fabricante-->
	<h3>Agregar Fabricante. </h3>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Nombre fabricante: <input type="text" name="nombre">
		<input type="submit" name="agregar" value="Insertar">
	</form>

	<?php
		$consulta="SELECT * FROM fabricantes";
		if (!$resultado=$miconex->query($consulta))
		 {
			die("Ocurrio un error en la consulta [".$miconex->error."]");
		}
		echo "<h2>Lista de Fabricantes</h2>";
		if ($resultado->num_rows>0) 
		{
			echo "Cantidad de fabricantes: ".$resultado->num_rows."<br/>";

			echo "<table border=1><tr><td>id</td><td>Nombre</td><td>Operaciones</td></tr>";
			while ($fila=$resultado->fetch_assoc()) 
			{
				echo "<tr><td>".$fila['id']."</td><td>".$fila['nombre']."</td>";
				echo "<td><a href=ver_fab.php?id=$fila[id]>Ver</a>";
				echo "<a href=editar_fab.php?id=$fila[id]>Editar</a>";
				echo "<a href=eliminar_fab.php?id=$fila[id]>Eliminar</a></td></tr>";
				}
			echo "</table>";		
		}
		else
		{
			echo "No hay fabricantes para mostrar <br/>";
		}

		//liberar
		$resultado->free();
		include("pie.php");
	?>

</body>
</html>