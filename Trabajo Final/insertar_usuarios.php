<?php

$usuario_formu=$_POST['usuario'];
$clave_formu=$_POST['clave'];
$nombre_formu=$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$edad_formu=$_POST['edad'];
$correo_formu=$_POST['mail'];
$sitio_formu=$_POST['sitio_web'];


include("conexion.php");

mysqli_query($datos_conexion, "INSERT INTO usuarios VALUES('$usuario_formu','$clave_formu', '$nombre_formu', '$apellido_formu',$edad_formu, '$correo_formu','$sitio_formu')");

$respuesta="Estimado/a:"."\r\n"."Le damos la bienvenida a nuestro sitio."."\r\n"."La información para ingresar en su cuenta es: "."\r\n"."Usuario: ".$usuario_formu."\r\n"."Clave: ".$clave_formu;


@mail($correo_formu,"Nombre del sitio.com", $respuesta);


header("location: clientes.php?ok");

?>
