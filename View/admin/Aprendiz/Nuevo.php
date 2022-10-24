<?php

    require "Public/Layouts/Header.php";
?>  
<h1>Crear Aprendiz </h1>
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
    <label for="">Correo</label><br>
    <input type="email" name="Email" placeholder="Correo"><br>
    <label for="">Telefono</label><br>
    <input type="number" name="Telefono" placeholder="Telefono"><br>
    <label for="">Categoria</label><br>
    <select name="Categoria">
        <?php
            include 'Config/Conexion.php';
            $consulta = "SELECT * FROM  categoria";
            $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
            foreach ($ejecutar as $opciones) {
        ?>
            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['Nombre']?></option>
        <?php
            }
        ?>
    </select><br>
    <input type="hidden" name="Estado" value="Activo">
    <input type="submit" class="btn btn-success" name="n" value="Crear">
    <input type="hidden" name="a" value="guardar">
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  