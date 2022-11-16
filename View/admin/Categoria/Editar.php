<?php
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form" >
<div class="contenedor-formularios-nuevos">
    <h1>EDITAR CATEGORIA </h1>
    <?php
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
    ?>
            <label for="">Nombre</label><br>
            <input type="text" name="Nombre" value="<?php echo $v['Nombre'] ?>" class="campo"><br>
            <label for="">Descripcion</label><br>
            <input type="text" name="Descripcion" value="<?php echo $v['Descripcion'] ?>" class="campo"><br>
            <label for="">Empleado encargado</label><br>
            <select name="Empleado" class="campo">
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
            <input type="submit" class="btn-enviar" name="btn" value="Actualizar">
            <input type="hidden" name="c" value="actualizar">
            <?php
            }
        }
    ?>
</div>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  