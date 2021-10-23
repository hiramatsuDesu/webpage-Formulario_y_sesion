<?php

	$us_formu=$_POST['us'];
	$cla_formu=$_POST['cla'];

	include("conexion.php");

	$resultado = mysqli_query($datos_conexion, "SELECT * FROM usuarios WHERE usuario='$us_formu' AND clave='$cla_formu'") or exit("Error: algo ocurrio y la consulta a la base no se efectuó");
	
	if(mysqli_num_rows($resultado))
	{
		while($row=mysqli_fetch_row($resultado)>0)
		{
			header("location: clientes.php?si");
		}
		
	}
	else
	{
		header("location: clientes.php?no");
	}

	
	
	
?>