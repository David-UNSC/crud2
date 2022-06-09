<html>
<head>
	<title>Productos</title>
</head>
<body>
	<?php
	include("encabezado.php");
	require("conexion.php");
	$consulta="SELECT productos.id, productos.descripcion, productos.precio, productos.stock, fabricantes.nombre FROM productos,fabricantes WHERE productos.fabricante=fabricantes.id";
	if(!$resultado=$miconex->query($consulta))
	{
		die("Ocurrió un error en la consulta [".$miconex->error."]");
	}
	echo "Consulta realizada con exito";
	echo "<h3><a href=nuevo.php>Nuevo Producto</a></h3>";
	echo "<h2>Lista de Productos de la Tienda</h2>";
	if ($resultado->num_rows>0) 
	{
		echo "Cantidad de productos: ".$resultado->num_rows."<br/>";
		echo "<table border=1><tr><td>id</td><td>Descripcion</td><td>Precio</td><td>Fabricante</td><td>Stock</td></td><td>Operaciones</td></tr>";
		while ($fila=$resultado->fetch_assoc()) 
		{
			//$res=$miconex->query("SELECT nombre FROM fabricantes WHERE id=$fila[fabricantes]");
			echo "<tr><td>".$fila['id']."</td><td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['precio']."</td><td>".$fila['nombre']."</td><td>".$fila['stock']."</td>";
			echo "<td><br/>";
			echo "<a href=editar.php?id=$fila[id]>Editar</a><br/>";
			echo "<br/>";
		}
		echo "</table>";

	}
	else
	{
		echo "No hay productos para mostrar <br/>";
	}

	$resultado->free();
	$miconex->close();
	
	echo "conexion finalizada con exito";
	include ("pie.php");

	?>
</body>
</html>