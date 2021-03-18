<?php
$destinatario = "franaragondeveloper@gmail.com";
$asunto = "Contacto desde Web";
$cuerpo = $_POST['message'];

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente 
$headers .= "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";

//direcciones que recibián copia 
$headers .= "Cc: " . $_POST['email'] . "\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);