<?php
    require "Public/Layouts/Header.php";
?>  
    <form action="" method="GET" class="container-form">
    <div class="contenedor-formularios-nuevos">
    <H1 for="">Digite el documento del aprendiz.</H1>
        <input type="text" name="busqueda" placeholder="Documento a consultar" class="campo">
        <input type="submit" class="btn-enviar" value="Buscar">
        <input type="hidden" name="s" value="BuscarA">
    </div>
    </form>
<?php
    require "Public/Layouts/Footer.php";
?>  