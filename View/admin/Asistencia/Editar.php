<?php
    require "Public/Layouts/Header.php";
?>  
<h1>Editar categoria </h1>
<form action="" method="GET">
    <?php
    if (!empty($dato)) {
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
     $estado = $v['Estado'] ;
        if ($estado == 'Activo') {
        ?>
    <label for="">Fecha</label><br>
    <select name="Fecha">
        <?php
            include 'Config/Conexion.php';
            $consulta = "SELECT * FROM  fecha";
            $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
            foreach ($ejecutar as $opciones) {
        ?>
            <option value="<?php echo $opciones['id']?>"><?php  echo $opciones['Fecha'];?></option>
        <?php
            }
        ?>
    </select><br><br>
    <label for="">Aprendiz documento</label><br>
    <select name="idaprendiz">
        <?php
            include 'Config/Conexion.php';
            $consulta = "SELECT * FROM  aprendiz";
            $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
            foreach ($ejecutar as $opciones) {
        ?>
            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['Documento']; echo " - "; echo $opciones['Nombres'];?></option>
        <?php
            }
        ?>
    </select><br><br>
    <label for="">Asistio?</label><br>
    <select name="checkbox" id="">
        <option value="Asistio">Asistio</option>
        <option value="Falto">Falto</option>
    </select>
    <input type="hidden" value="Activo" name="Estado">
    <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
    <input type="submit" class="btn-enviar" name="n" value="Editar">
    <input type="hidden" name="s" value="actualizar">
    <?php
     }}}}
    ?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  