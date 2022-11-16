<?php
    require "Public/Layouts/Header.php";
?>  
<form action="" method="GET" class="container-form">
    <div class="contenedor-formularios-nuevos">
    <h1>CREAR UN EVENTO </h1>
    <label for="">Nombre</label><br>
    <input type="text" name="Nombre" class="campo"><br>
    <label for="">Fecha</label><br>
    <input type="date" name="Fecha" class="campo"><br>
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
    <input type="submit" class="btn-enviar" name="n" value="Crear"> 
    <input type="hidden" name="f" value="guardar">
    </div>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>   