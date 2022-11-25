<?php
    $length= 12;
    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    $passl = $key;
    //Encriptar
    $sha1 = sha1($passl);
    $md5 = md5($sha1);
    $encriptada = sha1($md5);
    
    
?>
<link rel="stylesheet" href="Resources/Css/Login.css">  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar</title>
</head>
<body>
<div class="container-all">
<div class="ctn-form">
    <form action="" method="get">
        <label for="">Por favor digite el correo para recuperar</label>
        <br>
        <input type="email" placeholder="Correo" name="Email">
        <br>
        <input type="hidden" name="Pass" <?php echo "value=$encriptada" ?>>
        <input type="hidden" name="Pass_sin" <?php echo "value=$passl" ?>>
        <input type="submit" value="Recuperar">
        <input type="hidden" name="m" value="Recuperar">
    </form>
</div>
<div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">RECUPERAR CONTRASEÑA</h1>
            <br><br><br>
            <p class="text-description">Para recuperar su contraseña debe:
                <br>
                1.Ingresar el correo.
                <br>
                2.Revisar el correo ya que a el lleagra la nueva contraseña para ingresar.
            </p>
        </div>
</div>
</body>
</html>
<?php
    require "Public/Layouts/Footer.php";
?>  