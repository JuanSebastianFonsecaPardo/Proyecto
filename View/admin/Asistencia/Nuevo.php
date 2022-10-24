<?php
    require "Public/Layouts/Header.php";
    
?>  
<link rel='stylesheet' href='Resources/Css/cartas.css'>
<form action="" method="get">
<a href="<?php urlsite ?>?page=Rfecha" class="btn btn-danger"><i class="fa-solid fa-person-running"></i> Salir</a>
<div class='titulocard'>
    <h1>Participantes</h1>
    <div class='line'></div>
</div>
<?php
    if (!empty($dato)) {
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
                $estado = $v['Estado'] ;
                if ($estado == 'Activo') {
?>

    <div class='container-card'>
        <div class='card'>
            <div class='contenido-card'>
                <h3><?php echo $v['Nombres']; echo " "; echo $v['Apellidos'] ?></h3>
                <p><?php echo $v['TipoDocumento']; echo " = "; echo $v['Documento'] ?></p>
                <a href="<?php urlsite ?>?page=Gasistencia&IdEvento=<?php echo $idcategoria ?>&IdAprendiz=<?php echo $v['id'] ?>&IdFecha=<?php echo $fecha ?>&Asistencia=Asistio&Estado=Activo" class="btn btn-success"><i class="fa-solid fa-check"></i> Asistio</a>
                <a href="<?php urlsite ?>?page=Gasistencia&IdEvento=<?php echo $idcategoria ?>&IdAprendiz=<?php echo $v['id'] ?>&IdFecha=<?php echo $fecha ?>&Asistencia=Falto&Estado=Activo" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Falto</a>
            </div>
        </div>
    </div>
<?php
            }
            }
        }
    }
?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  