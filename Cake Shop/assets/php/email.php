<?php 

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$destino = "example@mail.com";
$asunto = "Correo desde nuestro sitio web";

$correo = "De: $nombre \n";
$correo .= "Correo: $email \n";
$correo .= "Teléfono: $telefono \n";
$correo .= "Mensaje: $mensaje\n";


mail($destino, $asunto, $correo);
header('Location:index.html');
