<?php
session_start();
$varsesion = $_SESSION['Correo'];
if ($varsesion == null || $varsesion == '') {
    header('location:'.urlsite."?page=Login");
    die();
}
$_GET['Email'];
$_GET['Pass'];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Assets/PHPMailer/src/PHPMailer.php';
require 'Assets/PHPMailer/src/Exception.php';
require 'Assets/PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if ($_GET['Email']) {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pivoot23@gmail.com';                     //SMTP username
    $mail->Password   = 'fpsqhamtzmqxupmv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pivoot23@gmail.com', 'REGISTRO EN LA PLATAFORMA');
    $mail->addAddress($_GET['Email']);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Registro en la plataforma';
    $mail->Body    = 'Bienvenido puede ingresar con el correo '.$_GET['Email'].' y su clave para ingreso es '.$_GET['Pass'].' .';

    $mail->send();
    echo 'Message enviado';
    header('location:'.urlsite."?page=Rempleado");
} 
?>