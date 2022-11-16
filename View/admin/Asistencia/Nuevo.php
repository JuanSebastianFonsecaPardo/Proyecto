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
    $Fecha = $_REQUEST['Fecha'];
    if (!empty($dato)) {
        foreach ($dato as $key => $value) {
            foreach ($value as $v) {
                $estado = $v['Estado'] ;
                $Aprendiz = $v['id'];
                if ($estado == 'Activo') {
                //si ya se registro
                    $consultaD = "SELECT * FROM asistencia WHERE IdFecha=".$Fecha." AND IdAprendiz=".$Aprendiz;
                    $conexionD = mysqli_connect("localhost","root","","borradorproyecto");
                    $resultadoD = mysqli_query($conexionD ,$consultaD);
                    $filasD = mysqli_num_rows($resultadoD);
                    if ($filasD) {
                        foreach ($resultadoD as $opciones) {
                            $Asistencia = $opciones['Asistencia'];
                            if ($Asistencia == "Asistio") {
                                ?>
                                <div class='container-card'>
                                    <div class='card'>
                                    <p class="btn btn-success"><i class="fa-solid fa-circle-check"></i></p>
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
                            if ($Asistencia == "Falto") {
                                ?>
                                <div class='container-card'>
                                    <div class='card'>
                                        <p class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></p>  
                                        <div class='contenido-card'>
                                            <h3><?php echo $v['Nombres']; echo " "; echo $v['Apellidos'] ?></h3>
                                            <p><?php echo $v['TipoDocumento']; echo " = "; echo $v['Documento'] ?></p>
                                            <a href="<?php urlsite ?>?page=Gasistencia&IdEvento=<?php echo $idcategoria ?>&IdAprendiz=<?php echo $v['id'] ?>&IdFecha=<?php echo $fecha ?>&Asistencia=Asistio&Estado=Activo" class="btn btn-success"><i class="fa-solid fa-check"></i> Asistio</a>
                                            <a href="<?php urlsite ?>?page=Gasistencia&IdEvento=<?php echo $idcategoria ?>&IdAprendiz=<?php echo $v['id'] ?>&IdFecha=<?php echo $fecha ?>&Asistencia=Falto&Estado=Activo" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Falto</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }}}
                //si no se registro
                    if (empty($filasD)) {
                        ?>
                            <div class='container-card'>
                                <div class='card'>
                                <p class="btn btn-warning"><i class="fa-solid fa-minus"></i></p>  
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
    }
?>
</form>
<?php
    require "Public/Layouts/Footer.php";
?>  