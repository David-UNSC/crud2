



	<?php
	include("encabezado.php");
	require("conexion.php");
$buscar=$_POST["buscar"]; 
$valor1=$_POST["valor1"]; 
?>

<html>
<head>
<title>problema</title>
</head>
<body>



<?php
if($buscar=='id'){
echo "<br> por id </br></br>" ;   
		$consulta="SELECT id,descripcion,precio,fabricante,stock FROM productos WHERE id='$valor1'";
	if(!$resultado=$miconex->query($consulta))
	{
		die("Ocurrió un error en la consulta [".$miconex->error."]");
	}
	echo "Consulta realizada con exito";
	echo "<h2>Lista de Productos encontrado</h2>";
	if ($resultado->num_rows>=0) 
	{
		echo "Cantidad de productos: ".$resultado->num_rows."<br/>";
		echo "<table border=1><tr><td>id</td><td>Descripcion</td><td>Precio</td><td>fabricante</td><td>Stock</td></td></tr>";
		while ($fila=$resultado->fetch_assoc()) 
		{
				echo "<tr><td>".$fila['id']."</td><td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['precio']."</td><td>".$fila['fabricante']."</td><td>".$fila['stock']."</td>";
		
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
}  
if($buscar=="nombre"){
echo "<br> por descripcion </br></br>" ;   	
		$consulta="SELECT id,descripcion,precio,fabricante,stock FROM productos WHERE descripcion='$valor1'";
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
		echo "<table border=1><tr><td>id</td><td>Descripcion</td><td>Precio</td><td>fabricante</td><td>Stock</td></td></tr>";
		while ($fila=$resultado->fetch_assoc()) 
		{
				echo "<tr><td>".$fila['id']."</td><td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['precio']."</td><td>".$fila['fabricante']."</td><td>".$fila['stock']."</td>";
		
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
}


	include ("pie.php");
 ?>

</body>
</html>






























