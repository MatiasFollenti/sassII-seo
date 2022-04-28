<?php 

$nombre = $_POST["nombre-completo"];
$email = $_POST["correo-electronico"];
$tipologia = $_POST["tipo-de-alojamiento"];
$DNI = $_POST["id-number"];
$PAX = $_POST["pax-number"];
$Origen = $_POST["lugar-de-origen"];
$Llegada = $_POST["fecha-de-llegada"];
$Salida = $_POST["fecha-de-salida"];

$para = "reservasblackforest@gmail.com";
$asunto = "Este mail fue enviado desde la web";

mail($para, $asunto, utf8_decode($nombre,$email,$tipologia,$DNI,$PAX,$Origen,$Llegada,$Salida));

header("location:exito.html";)
?>