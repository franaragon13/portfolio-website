<?php
$to = "franaragondeveloper@gmail.com";
$subject = "Contacto desde Web";
$txt = $_POST['message'];
$headers = "From: " . $_POST['email'];

mail($to, $subject, $txt, $headers);