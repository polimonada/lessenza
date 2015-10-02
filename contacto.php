[php]
<?php
ob_start();
$nombre = $_POST['nombre'];
$razon = $_POST['razon'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'informes@lessenza.pe';
$titulo = 'Correo desde web';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje” Razon: $razon\n Telefono: $telefono\n";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo '<script type="text/javascript">alert("Mensaje enviado, muchas gracias.");
 </script>';

} else {
echo  'Falló el envio';
}
}
if ($redirect_is_necessary)
{
    header('Location: '.$url);
    exit;
}
ob_end_flush();
?>
[/php]