<?php
	$destino = "informes@lessenza.pe";
	$asunto = "Contacto desde el sitio web";

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
	echo"<script type=\"text/javascript\">alert('Mensaje enviado, volviendo a la pagina'); window.location='index.html';</script>";
?>
