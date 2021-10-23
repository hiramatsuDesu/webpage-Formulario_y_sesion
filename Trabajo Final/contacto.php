<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilo.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	
	<?php
		include("cabecera.php");
	?>
	
    <section id="contenido">
    <h2>Contáctenos</h2>

	<div class="formulario">
		
		<form method="POST" action="enviar.php">
			
			<input id="nombre" type="tex" name="nombre" placeholder="Nombre" required="Coloque aquí su nombre" required maxlength="30" />
			
			<input id="apellido" type="tex" name="apellido" placeholder="Apellido" required="Coloque aquí su Apellido" required maxlength="100" />
			
			<input id="edad" type="number" name="edad" placeholder="Edad" required="Coloque aquí su edad" required maxlength="3" />
			
			<input id="correo" type="email" name="correo" placeholder="Correo Electrónico" required maxlength="100" />
			
			<input id="motivo" type="text" name="motivo" placeholder="Motivo de su consulta" required maxlength="150" required />
			
			<textarea id="mensaje" name="mensaje" placeholder="Dejenos su mensaje" required ></textarea>
			
			<input id="submit" type="submit" name="submit" value="Enviar" />
			</br>
			<h3>
			<?php
			
				if(isset($_GET['ok']))
				{
					echo "Su consulta ha sido enviada..!";
					?>
					</br>
					<nav id="boton">
							
					<ul>
						<li>
							<a href="mostrar.php"><h3>Mostrar Base de Datos</h3></a>
						</li>
					</ul>

					</nav>
					<?php
				}
			?>
			</h3>
			
		</form>
		
	</div>

    </section>

    <footer>
	Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>

</body>
</html>