<?php 

$destinatario = 'lucasealegre123@gmail.com';
$nombre = $_POST ['nombre'] ; 
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la pagina de contacto";
$mensajeCompleto = $mensaje . "\nAtentamente ". $nombre ;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('Enviado exitosamente')</script>";
echo "<script> setTimeout(\"Location:https://lucas2022.github.io/Web-N-1-Modulo2.github.io/php/contact.html\", 1000) </script>";



?>