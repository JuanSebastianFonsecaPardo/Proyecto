<?php
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
    <div class="contenedor-formularios-nuevos">
    <h1>EDITAR EMPLEADO</h1>
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
            <label for="">Cargo</label><br>
            <select name="Rol" class="campo">
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
            <input type="email" name="Email" value="<?php echo $v['Email'] ?>" class="campo"><br>
            <label for="">Telefono</label><br>
            <input type="number" name="Telefono" value="<?php echo $v['Telefono'] ?>" class="campo"><br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id"><br>
            <input type="submit" class="btn-enviar" name="btn" value="Actualizar">
            <input type="hidden" name="m" value="actualizar">
            <?php
            }
        }
    ?>
    </div>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  