<?php
$destino= "itj.18469@gmail.com";
$nombre= $_POST["Nombre"];
$correo= $_POST["Correo"];
$telefono= $_POST["Telefono"];
$mensaje= $_POST["Mensaje"];
$contenido = "Nombre: ". $nombre ."\n Correo:". $correo ."\n Telefono:". $telefono ."\n Mensaje:". $mensaje;

mail($destino,"Contacto", $contenido);
header("Location:gracias.html");

?>

