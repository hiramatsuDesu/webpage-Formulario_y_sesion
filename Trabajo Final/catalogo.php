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
    <h2>Catálogo</h2>
    
	<nav id="botonera_principal">
	
		<ul>
		<li> <a href="catalogo.php?valor=sc"> Sillon Capri </a></li>
		<li> <a href="catalogo.php?valor=mi"> Mesa Ipanema </a></li>
		<li> <a href="catalogo.php?valor=bv"> Banco Venecia </a> </li>
		</ul>
		
	</nav>
	
	<?php

	
		if(isset($_GET['valor']))
			{
			switch ($_GET['valor'])
			{
				case 'sc':
				$titulo = 'Sillon Capri';
				$precio = '$345,00';
				$caracteristicas = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
				$imagen = 'sillon1.jpg';
				break;
				
				case 'mi': 
				$titulo = 'Mesa Ipanema';
				$precio = '$500,00';
				$caracteristicas = ' Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
				$imagen = 'ipanema.jpg';
				break;
				
				case 'bv':
				$titulo = 'Banco Venecia';
				$precio = '$450,00';
				$caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
				$imagen = 'venecia.jpg';
				break;
			}

		?>
	
		<div id="espacio">
		
			<p>
			
				<h5> Producto: <?php echo $titulo; ?></h5>
				<h5> Precio: <?php echo $precio; ?></h5>
				<h5> Caracteristicas: <?php echo $caracteristicas; ?></h5>
				<h5> Imagen: </h5> <img src="imagenes/<?php echo $imagen;?>"> </h5>
				</br>
			
			</p>
		
		</div>
	
	
		<?php
			}
						
			else
			{ 
		
				echo "<h3> Seleccione un boton </h3>";
			
			}
			?> 
	
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>