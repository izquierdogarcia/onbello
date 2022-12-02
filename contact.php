<?php 
	error_reporting(0);
    $nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
    $web = $_POST['web'];
    $text = $_POST['text'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Teléfono: $phone<br> Web: $web<br> Idea del proyecto: $text<br> Mensaje:".$_POST['mensaje'];
    $to = "hola@especedigital.com";

	mail($to, $asunto, $mensaje)
 ?>