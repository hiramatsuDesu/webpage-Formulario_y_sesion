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
    <h2>Clientes</h2>

    <h3>Formulario 1</h3>

    <div class="formulario">

    	<form method="POST" action="insertar_usuarios.php">
    		
    		<input id="usuario" type="text" name="usuario" placeholder="Genere usuario" required required maxlength="6">

    		<input id="clave" type="text" name="clave" placeholder="Genere clave" required required maxlength="6">

    		<input id="nombre" type="text" name="nombre" placeholder="Ingrese nombre" required required maxlength="30">

    		<input id="apellido" type="text" name="apellido" placeholder="Ingrese Apellido" required required maxlength="100">

    		<input id="edad" type="int" name="edad" placeholder="Edad">

    		<input id="mail" type="email" name="mail" placeholder="E-mail">

    		<input id="sitio_web" type="web" name="sitio_web" placeholder="Sitio Web">

    		<input id="submit" type="submit" name="submit" value ="Enviar">

    		</br>

    		<?php

    		if (isset($_GET['ok'])) 
    		{
    			echo "Datos recibidos.";
    		}
    		?>

    	</form>

    </div>


    <h3>Formulario 2</h3>

    <div class="formulario">
    	<h3>Verificación de usuario y clave</h3>
    	<form method="POST" action="ingresar_usuarios.php">
    		<input id="us" type="text" name="us" placeholder="Ingrese usuario" required required maxlength="6">

    		<input id="cla" type="text" name="cla" placeholder="Ingrese clave" required required maxlength="6">

    		<input id="submit" type="submit" name="submit" value ="Vericar">

            <?php

			if (isset($_GET['si'])) 
    		{
    			echo "El usuario existe";
    		}
			elseif(isset($_GET['no']))
			{
				echo "El usuario NO existe";
			}
			
            ?>

    	</form>

    </div>
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>