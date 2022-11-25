<?php
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
<div class="contenedor-formularios-nuevos">
    <h1>EDITAR ESTUDIANTES</h1>
    <?php
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
    ?>
            <label for="">Documento</label><br>
            <input type="number" name="Documento" value="<?php echo $v['Documento'] ?>" class="campo"><br>
            <label for="">Tipo de documento</label><br>
            <select name="TipoDocumento" class="campo">
            <?php
                $tipodocumento = $v['TipoDocumento'];
                if ($tipodocumento == 'Cedula') {
                    ?>
                    <option value="Cedula">Cedula</option>
                    <option value="Tarjeta identidad">Tarjeta de identidad</option>
                    <?php
                }
                if ($tipodocumento == 'Tarjeta identidad') {
                    ?>
                    <option value="Tarjeta identidad">Tarjeta de identidad</option>
                    <option value="Cedula">Cedula</option>
                    <?php
                }  
            ?>
            </select><br>
            <label for="">Nombres</label><br>
            <input type="text" name="Nombre" value="<?php echo $v['Nombres'] ?>" class="campo"><br>
            <label for="">Apellidos</label><br>
            <input type="text" name="Apellido" value="<?php echo $v['Apellidos'] ?>" class="campo"><br>
            <label for="">Correo</label><br>
            <input type="email" name="Email" value="<?php echo $v['Email'] ?>" class="campo"><br>
            <label for="">Telefono</label><br>
            <input type="number" name="Telefono" value="<?php echo $v['Telefono'] ?>" class="campo"><br>
            <label for="">Categoria</label><br>
            <select name="Categoria" class="campo">
                <?php
                    include 'Config/Conexion.php';
                    $consulta = "SELECT * FROM  categoria";
                    $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                ?>
                <?php
                    foreach ($ejecutar as $opciones) {
                ?>
                    <option value="<?php echo $opciones['id']?>"><?php echo $opciones['Nombre']?></option>
                <?php
                    }
                ?>
            </select><br><br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
            <input type="submit" class="btn-enviar" name="btn" value="Actualizar">
            <input type="hidden" name="a" value="actualizar">
            <?php
            }
        }
    ?>
</div>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  