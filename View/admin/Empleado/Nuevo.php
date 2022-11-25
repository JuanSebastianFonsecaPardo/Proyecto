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
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
<div class="contenedor-formularios-nuevos">
    <h1>CREAR EMPLEADO </h1>
    <label for="">Documento</label><br>
    <input type="number" name="Documento" placeholder="Documento" class="campo"><br>
    <label for="">Tipo de documento</label><br>
    <select name="TipoDocumento" class="campo">
        <option value="Cedula">Cedula</option>
        <option value="Tarjeta identidad">Tarjeta de identidad</option>
    </select><br>
    <label for="">Nombres</label><br>
    <input type="text" name="Nombre" placeholder="Nombres" class="campo"><br>
    <label for="">Apellidos</label><br>
    <input type="text" name="Apellido" placeholder="Apellidos" class="campo"><br>
    <label for="">Cargo</label><br>
    <select name="Rol" class="campo">
        <option value="Director Deportivo">Director Deportivo</option>
        <option value="Instructor">Instructor</option>
    </select><br>
    <label for="">Correo</label><br>
    <input type="email" name="Email" placeholder="Correo" class="campo"><br>
    <label for="">Teléfono</label><br>
    <input type="number" name="Telefono" placeholder="Telefono" class="campo"><br><br>
    <input type="hidden" name="Pass" <?php echo "value=$encriptada" ?>>
    <input type="hidden" name="Pass_sin" <?php echo "value=$passl" ?>>
    <input type="hidden" name="Estado" value="Activo">
    <input type="submit" class="btn-enviar" name="n" value="Crear">
    <input type="hidden" name="m" value="guardar">
</div>
</form>

<?php
    require "Public/Layouts/Footer.php";
?>  