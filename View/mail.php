<?php
session_start();
$varsesion = $_SESSION['Correo'];
if ($varsesion == null || $varsesion == '') {
    header('location:'.urlsite."?page=Login");
    die();
}
$_GET['Email'];
$_GET['Pass_sin']; 

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

$incss  = "<head><style>
:root{
    --Color1: #ffffff;
    --Color2: #000000;
    --Color3: #3C4999;
    --Color4: #CFE0E2;
    --Color5: #E9511F;
    --Color6: #FCCB82;
    --Color7: #7a7a7a;
    --Color8: #0d2033;
    --Color9: #01004d;
}

.h1{
    color: #E9511F;
}

body{
    font-family: arial,helvetica,sans-serif;
}

.contenedor{
    padding: 10px;   
    margin: 20px;
    background-color: var(--Color1);
    border-radius: 5px;
}

.contenedor-texto-imagen{
    margin: auto;
    margin-right: 100px;
    margin-left: 100px;
    padding: 2px;
    font-size: 15px;
    background: var(--Color1);
    color: #acacac; 
}

.Imagen-correo{
    height: 150px;
    width: 150px;
    margin: 10px;
}

.Texto-correo{
    text-align: center;
    justify-content: center;
    margin: auto;
    font-size: 20px;
    margin-right: 100px;
    margin-left: 100px;
}

/*:::::Pie de Pagina*/
.pie-pagina{
    width: 100%;
    background-color: #6e6e6e;
    
}
.pie-pagina .grupo-1{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap:50px;
    padding: 45px 0px;
    display: flex;
}
.pie-pagina .grupo-1 .box figure{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.pie-pagina .grupo-1 .box figure img{
    width: 200px;
}
.pie-pagina .grupo-1 .box h2{
    color: #ffffff;
    margin-bottom: 25px;
    font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
    color: #ffffff;
    margin-bottom: 10px;
}
.pie-pagina .grupo-2{
    background-color: #0d2033;
    padding: 15px 10px;
    text-align: center;
    color: #ffffff;
}
</style></head>";

$cuerpo = '

<Div class="contenedor">
        <div class="contenedor-texto-imagen" align="center">
            <img src="https://i.postimg.cc/9FMrYksK/Logo-Lado-Negro-Abajo.png" class="Imagen-correo">
            <h1 class="Texto-correo"><center>Registro Plataforma</center></h1>
            <hr>
    </Div>    
    <div class="content">
        <h2 id="Nombre">
            Hola! <b>'.$_GET['Email'].'</b>
        </h2>

        <p>Bienvenido  su clave para ingreso es :</p><br>
        <p>Contraseña :  <b>'.$_GET['Pass_sin'].'</b></p><br>
        <p>Esperamos puedas seguir disfrutando de nuestros servicios.</p><br>
        <p>Que tengas un bien dia.</p>
<hr>
<br>
<footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="https://i.postimg.cc/KYjcrhdH/Logo-Lado-Blanco.png">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>PIVOOT es un sistema en la capacidad de generar usuarios como lo son empleados y estudiantes, asignandoles una categoria a trabajar o para los entrenamientos.Igualmente llevando a cabo una función de toma de asistencias para sus aprendices.</p>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2022 <b>PIVOOT</b> - Todos los Derechos Reservados.</small>
            </div>
        </footer>
        
';


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
    $mail->Body    = $incss.$cuerpo;  //'Bienvenido  su clave para ingreso es <b>''</b>.';

    $mail->send();
    echo "
    <script>
        window.location = '../Proyecto/';
    </script>";
} 
?>