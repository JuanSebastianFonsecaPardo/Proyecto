<?php
    require "Public/Layouts/Header.php";
?>  
<h1>Crear Categoria </h1>
<form action="" method="GET">
    <label for="">Nombre</label><br>
    <input type="text" name="Nombre" placeholder="Nombres"><br>
    <label for="">Descripcion</label><br>
    <input type="text" name="Descripcion" placeholder="Descripcion"><br>
    <label for="">Empleado encargado</label><br>
    <select name="Empleado">
        <?php
            include 'Config/Conexion.php';
            $consulta = "SELECT * FROM  empleado";
            $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
            foreach ($ejecutar as $opciones) {
        ?>
            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['id']; echo " - "; echo $opciones['Nombres'];?></option>
        <?php
            }
        ?>
    </select><br><br>
    <input type="hidden" name="Estado" value="Activo">
    <input type="submit" class="btn btn-success" name="n" value="Crear">
    <input type="hidden" name="c" value="guardar">
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  