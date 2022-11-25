<?php
    require "Public/Layouts/Header.php";
    $nombrec = $varsesion;                 
    $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
    $consulta = "SELECT * FROM empleado WHERE Email='".$nombrec."'";
    $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
    foreach ($ejecutar as $opciones) {
    $nombre = $opciones['Nombres'];
    }
?>  
    <form action="" method="get" class="container-form">
    <div class="contenedor-formularios-nuevos">
        <H1 for="">Por favor digite la nueva contraseña</H1>
        <br>
        <label for="">Ingrese su nueva contraseña</label><br>
        <input type="password" placeholder="Nueva clave" name="Pass" class="campo">
        <br>
        <label for="">Confirme su nueva contraseña</label><br>
        <input type="password" placeholder="Nueva clave" name="Pass2" class="campo">
        <br>
        <input type="hidden" name="Email" <?php echo "value=$varsesion" ?>>
        <input type="hidden" name="Nombre" <?php echo "value=$nombre" ?>>
        <input type="submit" class="btn-enviar" value="Cambiar">
        <input type="hidden" name="m" value="Clave">
    </div>
    </form>
<?php
    require "Public/Layouts/Footer.php";
?>  