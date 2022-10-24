<?php
    require "Public/Layouts/Header.php";
?>  
    <form action="" method="get">
        <label for="">Por favor digite la nueva contraseña</label>
        <br>
        <input type="password" placeholder="Nueva clave" name="Pass">
        <br>
        <input type="hidden" name="Email" <?php echo "value=$varsesion" ?>>
        <input type="submit" value="Cambiar">
        <input type="hidden" name="m" value="Clave">
    </form>
<?php
    require "Public/Layouts/Footer.php";
?>  