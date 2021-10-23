<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Mostrar Base de DatosL</title>
<link href="estilo.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">

	<?php
		include("cabecera.php");
	?>
	
    <section id="contenido">
   
		<h3>Datos guardados en la Base de Datos</h3>

			<?php
				include("conexion.php");

				$consultar_datos=mysqli_query($datos_conexion, "SELECT * FROM formulario");

				while ($mostrar_datos=mysqli_fetch_array($consultar_datos))
				{
					?>

					<div class="muestra">
						<ul>
							<li>Nombre: <?php echo $mostrar_datos['nombre'];?></li>
							<li>Apellido:<?php echo $mostrar_datos['apellido'] ?> </li>
							<li>Edad: <?php echo $mostrar_datos['edad'] ?></li>
							<li>Correo: <?php echo $mostrar_datos['correo'] ?> </li>
							<li>Motivo: <?php echo $mostrar_datos['motivo'] ?></li>
							<li>Mensaje: <?php echo $mostrar_datos['mensaje']?></li>
						</ul>
					</div>

					<?php
				}

			?>



    </section>

	<footer>
	Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>
