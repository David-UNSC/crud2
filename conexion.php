<?php
	//crear el objeto de conexion
	$miconex=new mysqli("localhost","root","","test1");
	//comprobar conexion
	if ($miconex->connect_errno) 
	{
		die("Fallo la conexion [".$miconex->connect_error."]");
	}
	echo "Conexion conseguida con la Base de Datos<br/>";
?>