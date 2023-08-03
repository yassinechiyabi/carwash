<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['emetteur'];
    $to = $_POST['destinataire'];
    $subject = $_POST['service'];
    $message = "J'ai commandé sevice : ".$_POST['service']."<br> heure de disponibilité : ".$_POST["rendezvous"];
    $headers .= "De :" . $from;
    $message=$message."<br><hr><br>Email: ".$_POST['emetteur']."<br>Phone: ".$_POST['phone'];
    mail($to,$subject,$message, $headers);
    echo $_POST["rendezvous"];
    
?>