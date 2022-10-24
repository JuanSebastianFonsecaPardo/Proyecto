<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="Resources/Css/Login.css">

<div class="container-all">

    <div class="ctn-form">
        <img src="images/logo-magtimus-small.png" alt="" class="logo">
        <h1 class="title">Iniciar Sesión</h1>

        <form action="" method="GET">

            <label for="">Correo</label>
            <input type="email" placeholder="Ingrese su correo" name="Correo">
            <label for="">Contraseña</label><br>
            <input type="password" placeholder="Ingrese la contraseña" name="Password">
            <input type="submit" value="ingresar">
            <input type="hidden" name="m" value="ingresar">

        </form>
        <?php
echo "<a href='".urlsite."?page=Olvido'>Olvido su clave?</a>";
?>
    </div>

    <div class="ctn-text">
        <div class="capa"></div>
        <h1 class="title-description">PIVOOT</h1>
        <img style="margin: auto; paddind: 5px; margin-top: 50px;" width=" 200px"  height=" 350px" center src="Resources/img/ImagenLogin.png" alt="">
        <p class="text-description">Grizzllies Basketball</p>
    </div>

</div>
</body>
</html>