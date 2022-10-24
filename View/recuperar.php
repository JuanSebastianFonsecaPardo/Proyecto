<?php
    $pass = mt_rand(100000 , 999999);
    $passl = $pass;
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
        <input type="hidden" name="Pass" <?php echo "value=$pass" ?>>
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