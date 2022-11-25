<?php
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
<div class="contenedor-formularios-nuevos">
    <h1>CREAR CATEGORÍA </h1>
    <label for="">Nombre</label><br>
    <input type="text" name="Nombre" placeholder="Nombres" class="campo"><br>
    <label for="">Descripción</label><br>
    <input type="text" name="Descripcion" placeholder="Descripcion" class="campo"><br>
    <label for="">Empleado encargado</label><br>
    <select name="Empleado" class="campo">
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
    <input type="submit" class="btn-enviar" name="n" value="Crear">
    <input type="hidden" name="c" value="guardar">
</div>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  