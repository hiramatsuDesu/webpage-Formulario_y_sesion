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
	
    <h2>Noticias</h2>
	
	<?php
	$novedades=array(
	
	array('Cuál es el origen de la crisis mundial de microchips y cómo puede afectarte', 'Los fabricantes de autos y las compañías de dispositivos electrónicos enfrentan problemas para abastecerse de chips de computadora.', 'imagen1.jpg'),
	
	array('Transistores inversos', 'Qué son, para qué sirven y por qué aspiran a reinventar la electrónica. Los transistores nos prometen circuitos integrados más sencillos, rápidos, compactos y con un consumo inferios, por lo que podrían ayudarnos a dilatar aún más la Ley de Moore', 'imagen2.jpg'),
	
	array('El país que está luchando contra la cultura de tirar todo lo viejo a la basura', 'Una combinación de aficionados entusiastas, cafés de reparación y nuevas leyes que protegen el derecho a la reparar podría ayudar a dismnuir las crecientes montañas de aparatos electrónicos averidados.', 'imagen3.jpg'),
	
	array ('Qué es el litio geotérmico y por qué puede revolucionar las energías limpias', 'Un novedoso sistema para extraer el litio ha resultado ser de los más resputuoso con el medio ambiente que otras formas más intensivas en agua o tierra como son las de Latinoamérica. ¿Ha llegado una nueva fiebre del oro', 'imagen4.jpg')
	
	);
	?>
	
	<?php
	$longitud=count($novedades);
	
	for($i=0; $i<$longitud; $i++)
	{
		?>
		<section class="tarea">
		 <p>
		 <img src="imagenes/<?php echo $novedades [$i][2]; ?>">
		<h4>
		<?php echo $novedades[$i][0]; ?>
		</h4>
		<p>
		<?php echo $novedades[$i][1]; ?>
		 </p>
		</section>
		
	<?php
	}
?>
	
    </section>
	
	
<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>