<?php
    require "Public/Layouts/Header.php";
?>  
    <form action="View/admin/Empleado/recibe_excel.php" method="POST" class="container-form" enctype="multipart/form-data" >
    <div class="contenedor-formularios-nuevos">
        <H1 for="">Por favor seleccione el archivo excel a subir</H1>
        <br>
        <input type="file" name="dataEmpleado" id="file-input" class="campo">
        <br>
        <input type="hidden" name="Email" <?php echo "value=$varsesion" ?>>
        <input type="submit" class="btn-enviar" value="Subir excel" name="subir">
    </div>
    </form>
<?php
    require "Public/Layouts/Footer.php";
?>  