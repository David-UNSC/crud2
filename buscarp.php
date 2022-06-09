<html>
<head>
	<title>Fabricantes</title>
</head>
<body>
	<?php include("encabezado.php");
		require("conexion.php");
	?>
	<!--formulario para agregar fabricante-->
	<h3>Buscar Producto. </h3>
	<form action="buscar_mostrar.php" method="post">
Id o Nombre:
<input type="text" name="valor1">
<br>
<br>
<select name="buscar">
<option value="id">id</option>
<option value="nombre">Nombre</option>
</select>

<input type="submit" value="buscar1">
</form>

<?php
		//liberar

		include("pie.php");

?>

</body>
</html>















