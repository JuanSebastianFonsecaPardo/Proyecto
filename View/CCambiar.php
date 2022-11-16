<?php
    require "Public/Layouts/Header.php";
?>  
    <form action="" method="get" class="container-form">
    <div class="contenedor-formularios-nuevos">
        <H1 for="">Por favor digite la nueva contraseña</H1>
        <br>
        <input type="password" placeholder="Nueva clave" name="Pass" class="campo">
        <br>
        <input type="hidden" name="Email" <?php echo "value=$varsesion" ?>>
        <input type="submit" class="btn-enviar" value="Cambiar">
        <input type="hidden" name="m" value="Clave">
    </div>
    </form>
<?php
    require "Public/Layouts/Footer.php";
?>  