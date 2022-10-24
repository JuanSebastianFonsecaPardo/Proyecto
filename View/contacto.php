<?php
$_GET['Email'];
$_GET['Nombre'];
$_GET['Mensaje'];
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

try {
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
    $mail->setFrom('pivoot23@gmail.com');
    $mail->addAddress('pivoot23@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'IMPORTANTE -'.$_GET['Nombre'];
    $mail->Body    = $_GET['Nombre'].' : '.$_GET['Mensaje'].'<br>Para responder el mensaje renvielo a '.$_GET['Email'];

    $mail->send();
    echo 'Message enviado';
    header('location:'.urlsite);
} catch (Exception $e) {
    echo "Message Error: {$mail->ErrorInfo}";
}
?>