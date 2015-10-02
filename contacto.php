<?php
	$destino = "informes@lessenza.pe";
	$asunto = "correo desde la web";

	$comentario = "
		Nombre: $_POST[nombre]
		Razon: $_POST[razon]
		Telefono: $_POST[telefono]
		Email: $_POST[email]
		Comentario: $_POST[mensaje]
	";

	$headers = 'Form:'.$_POST['email']."\r\n".
		'Reply-to:'.$_POST['email']."\r\n".
		'X-Mailer: PHP/' .phpversion();

	mail($destino,$asunto,$comentario,$headers);

	echo"Mensaje enviado";
?>