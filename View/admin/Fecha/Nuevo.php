<?php
    require "Public/Layouts/Header.php";
?>  
<h1>Crear Fecha </h1>
<form action="" method="GET">
    <label for="">Nombre</label><br>
    <input type="text" name="Nombre"><br>
    <label for="">Fecha</label><br>
    <input type="date" name="Fecha"><br>
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
    <input type="submit" class="btn btn-success" name="n" value="Crear">
    <input type="hidden" name="f" value="guardar">
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  