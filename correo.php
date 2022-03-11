<?php 

$destinatario = 'lucasealegre123@gmail.com';
$nombre = $_POST ['nombre'] ; 
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la pagina de contacto";
$mensajeCompleto = $mensaje . "\n Atentamente ". $nombre ;

mail($destinatario, $asunto, $mensajeCompleto, $header);
header("Location:contact.html");
/*echo "<script>alert('Enviado exitosamente')</script>";
echo "<script> setTimeout(\"Location:index.html\", 1000) </script>";
*/

?>