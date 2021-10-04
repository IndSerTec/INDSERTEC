<?php 
$nombre = $_POST["Tu nombre"]
$gmail = $_POST['Correo eletronico']
$asunto = $_POST['Asunto']
$mensaje = $_POST['Mensaje']

$header = 'From: ' . $gmail. " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $gmail.  " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'indsertecpruebas@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
-->


	
