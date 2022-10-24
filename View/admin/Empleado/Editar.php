<?php
    require "Public/Layouts/Header.php";
?>  
<h1>Editar empleado </h1>
<form action="" method="GET">
    <?php
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
    ?>
            <label for="">Documento</label><br>
            <input type="number" name="Documento" value="<?php echo $v['Documento'] ?>"><br>
            <label for="">Tipo de documento</label><br>
            <select name="TipoDocumento">
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
            <input type="text" name="Nombre" value="<?php echo $v['Nombres'] ?>"><br>
            <label for="">Apellidos</label><br>
            <input type="text" name="Apellido" value="<?php echo $v['Apellidos'] ?>"><br>
            <label for="">Cargo</label><br>
            <select name="Rol">
            <?php
                $rol = $v['Rol'];
                if ($rol == 'Director Deportivo') {
                    ?>
                    <option value="Director Deportivo">Director Deportivo</option>
                    <option value="Instructor">Instructor</option>
                    <?php
                }
                if ($rol == 'Instructor') {
                    ?>
                    <option value="Instructor">Instructor</option>
                    <option value="Director Deportivo">Director Deportivo</option>
                    <?php
                }  
            ?>
            </select><br>
            <label for="">Correo</label><br>
            <input type="email" name="Email" value="<?php echo $v['Email'] ?>"><br>
            <label for="">Telefono</label><br>
            <input type="number" name="Telefono" value="<?php echo $v['Telefono'] ?>"><br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id"><br>
            <input type="submit" class="btn btn-success" name="btn" value="Actualizar">
            <input type="hidden" name="m" value="actualizar">
            <?php
            }
        }
    ?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  