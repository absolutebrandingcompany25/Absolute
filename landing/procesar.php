<?php
	$datos = json_decode(file_get_contents("php://input"));
	// Aquí podemos procesar los datos
	$nombre = $datos->nombre;
	$telefono = $datos->telefono;
	$para      = 'programacion@absolutebrandingcompany.com';
	$titulo    = 'Persona Interesada desde Landing Absolute';
	
	$cabeceras = 'From: programacion@absolutebrandingcompany.com' . "\r\n" .
		'Reply-To: programacion@absolutebrandingcompany.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$mensaje="Nombre: $nombre\nTeléfono: $telefono";
	if(mail($para, $titulo, $mensaje, $cabeceras)){
		echo json_encode("Formulario enviado");
	}else{
		echo json_encode("Error en Formulario");
	}
	
?>
