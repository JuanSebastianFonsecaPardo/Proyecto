<?php
    require "Public/Layouts/Header.php";
?>  
<h1>Editar categoria </h1>
<form action="" method="GET">
    <?php
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
    ?>
            <label for="">Nombre</label><br>
            <input type="text" name="Nombre" value="<?php echo $v['Nombre'] ?>"><br>
            <label for="">Descripcion</label><br>
            <input type="text" name="Descripcion" value="<?php echo $v['Descripcion'] ?>"><br>
            <label for="">Empleado encargado</label><br>
            <select name="Empleado">
                <?php
                    include 'Config/Conexion.php';
                    $consulta = "SELECT * FROM  empleado";
                    $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                ?>
                <?php
                    foreach ($ejecutar as $opciones) {
                ?>
                    <option value="<?php echo $opciones['id']?>"><?php echo $opciones['id']; echo " - "; echo $opciones['Nombres']?></option>
                <?php
                    }
                ?>
            </select><br><br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
            <input type="submit" class="btn btn-success" name="btn" value="Actualizar">
            <input type="hidden" name="c" value="actualizar">
            <?php
            }
        }
    ?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  