<?php

	$name=$_POST['nombre'];
	$surname=$_POST['apellido'];
	$age=$_POST['edad'];
	$email=$_POST['correo'];
	$subjet=$_POST['motivo'];
	$messaje=$_POST['mensaje'];

	$informacion="Nombre: ".$name."\r\n"."Apellido: ".$surname."\r\n"."Edad: ".$age."\r\n"."E-mail: ".$email."$email"."\r\n"."Motivo: ".$subjet."Mensaje: "."\r\n".$messaje;
	
	$remitente ="From: $name $surname <$email>"; 
	
	@mail("majitohiramatsu@gmail.com", "Consulta enviada desde el sitio", $informacion, $remitente);
	
	$respuesta="Estimad@"."\r\n"."Hemos recibido su consulta, en breve estaremos resolviéndola. Por favor no responda este mensaje."."\r\n"."Gracias";
	@mail($email, "Hemos recibio su consulta por nuestro sitio: www.misitio.com",$respuesta);
	
	
	include("conexion.php");

	mysqli_query($datos_conexion, "INSERT INTO formulario VALUES(DEFAULT, '$name', '$surname', '$age', '$email', '$subjet', '$messaje')");


	header("location: contacto.php?ok");
	


	
?>