<?php
$apellido = "";
$name = $_POST['nombre'];
$apellido = $_POST['empresa'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = $name . " " . $apellido;
$body = "<h2>Nombre: " . $name . " " . $apellido . "</h2><br><h3>Correo: " . $email . "</h3><br><p>" . $mensaje . "</p>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include_once 'PHPMailer/pwd.php';

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";

$mail->SMTPDebug = 1;
$mail->Username = $emailFrom;
$mail->Password = $pwd;
$mail->SMTPAutoTLS = false;

$mail->From = $emailFrom;
$mail->FromName = "CV - WEB Javier Renedo";
$mail->addReplyTo($email);
$mail->AddAddress("renedogj@gmail.com");

$mail->Subject = $asunto;
$mail->isHTML(true);
$mail->Body = $body;

$mail->send();
?>