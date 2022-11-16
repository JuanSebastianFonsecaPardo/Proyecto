<?php

    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
    <div class="contenedor-formularios-nuevos">
    <h1>CREAR APRENDIZ</h1>
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
    <label for="">Correo</label><br>
    <input type="email" name="Email" placeholder="Correo" class="campo"><br>
    <label for="">Telefono</label><br>
    <input type="number" name="Telefono" placeholder="Telefono" class="campo"><br>
    <label for="">Categoria</label><br>
    <select name="Categoria" class="campo">
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
    <input type="submit" class="btn-enviar" name="n" value="Crear">
    <input type="hidden" name="a" value="guardar">
    </div>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  