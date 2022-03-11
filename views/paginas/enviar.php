<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$puesto = $_POST['puesto'];
$interes = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

switch ($interes) {
    case 1:
        $interes="Inmueble";
        break;
    case 2:
        $interes="Departamento";
        break;
    case 3:
        $interes="Terreno";
        break;
    
    default:
        break;
}

$header = 'From: '.$correo."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
if(!($empresa==='')){
    $message .= "Perteneciente a la empresa ".$empresa."\r\n";
}
if(!($puesto==='')){
    $message .= "En el puesto de ".$puesto."\r\n";
}
$message .= "Con email: " .$correo."\r\n";
$message .= "Teléfono de contacto: " . $telefono . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());


$para = 'marco_ben2010@hotmail.com';

if(!($empresa==='')){
    $asunto = 'La empresa '.$empresa." esta interesada en un ".$interes." '\r\n";
}
else{
    $asunto = $nombre." esta interesad@ en un ".$interes." '\r\n";
}

mail($para, $asunto, utf8_decode($message));

header("Location:index.php");