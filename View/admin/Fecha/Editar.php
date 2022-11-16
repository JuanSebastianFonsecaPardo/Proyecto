<?php
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
<div class="contenedor-formularios-nuevos">
    <h1>EDITAR EVENTO </h1>
    <?php
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
    ?>
            <label for="">Nombre</label><br>
            <input type="text" name="Nombre" value="<?php echo $v['Nombre'] ?>" class="campo"><br>
            <label for="">Fecha</label><br>
            <input type="date" name="Fecha" value="<?php echo $v['Fecha'] ?>" class="campo"><br>
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
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
            <input type="submit" class="btn-enviar" name="btn" value="Actualizar">
            <input type="hidden" name="f" value="actualizar">
            <?php
            }
        }
    ?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  