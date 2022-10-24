<?php
    require "Public/Layouts/Header.php";
?>  
<h1>Editar Fecha </h1>
<form action="" method="GET">
    <?php
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
    ?>
            <label for="">Fecha</label><br>
            <input type="date" name="Fecha" value="<?php echo $v['Fecha'] ?>"><br>
            
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
            <input type="submit" class="btn btn-success" name="btn" value="Actualizar">
            <input type="hidden" name="f" value="actualizar">
            <?php
            }
        }
    ?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  