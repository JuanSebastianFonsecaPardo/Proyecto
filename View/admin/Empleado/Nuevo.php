<?php
    $pass = mt_rand(100000 , 999999);
    $passl = $pass;
    require "Public/Layouts/Header.php";
    
?>  
<h1>Crear empleado </h1>
<form action="" method="GET">
    <label for="">Documento</label><br>
    <input type="number" name="Documento" placeholder="Documento"><br>
    <label for="">Tipo de documento</label><br>
    <select name="TipoDocumento">
        <option value="Cedula">Cedula</option>
        <option value="Tarjeta identidad">Tarjeta de identidad</option>
    </select><br>
    <label for="">Nombres</label><br>
    <input type="text" name="Nombre" placeholder="Nombres"><br>
    <label for="">Apellidos</label><br>
    <input type="text" name="Apellido" placeholder="Apellidos"><br>
    <label for="">Cargo</label><br>
    <select name="Rol">
        <option value="Director Deportivo">Director Deportivo</option>
        <option value="Instructor">Instructor</option>
    </select><br>
    <label for="">Correo</label><br>
    <input type="email" name="Email" placeholder="Correo"><br>
    <label for="">Telefono</label><br>
    <input type="number" name="Telefono" placeholder="Telefono"><br><br>
    <input type="hidden" name="Pass" <?php echo "value=$pass" ?>>
    <input type="hidden" name="Estado" value="Activo">
    <input type="submit" class="btn btn-success" name="n" value="Crear">
    <input type="hidden" name="m" value="guardar">
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  