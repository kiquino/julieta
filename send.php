<?php

$nombre = $_POST['nombre'];

$email = $_POST['mail'];

$tel = $_POST['tel'];

$mensaje = $_POST['text'];


echo 'El mensaje que se envio fue: '.$nombre.' - '.$email.' - '.$tel.' - '.$mensaje;

$subject ="Mensaje";
$header="MIME-Version: 1.0\r\n";
$header.="Content-type: text/html; charset=UTF-8\r\n";
$header.="From: Flash Argentina 2021 <diegovillegas@c1910762.ferozo.com>";


$mensaje.="</p> \r\n <hr style='border:1px solid black'><br> Responder a: <a href=mailto:".$email.">".$nombre."</a>";

if ($nombre != '' && $apellido != '' ) {


    if (mail('info@flashmobile.com.ar,sladovnik@gmail.com',$subject,$mensaje,$header)) {
        echo true;
    
}

  
    
}else{
    echo false;
}

?>