<?php
	$destinatario = 'mcferrocroce@gmail.com';

	$nombre =$_POST['nombre'];
	$apellido =$_POST['apellido'];
	$email =$_POST['email'];
	$asunto =$_POST['asunto'];
	$Mensaje =$_POST['Mensaje'];

	$header = "Formulario completado";
	$mensajeCompleto = $Mensaje ."\nDe: " . $nombre;
	
	mail($destinatario, $asunto, $Mensaje, $header);
	echo "<script>alert('enviado exitosamente')</script>";
	echo "<script>setTimeout(\"location.href="contacto.html"\")</script>";


?>