<?php
    header("Content-Type application/xls");
    header("Content-Disposition: attachment; filename= InformeEstudiante.xls");
?>
        <h1>Asistencia</h1>
        <p>Asistencias del Estudiante del No de documento <?php echo $Busca ?> para descargar un informe deslice hasta el final de la tabla.</p>
        <br> <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estudiante</th>
                <th scope="col">Asistencia</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if (!empty($dato)) {
                    foreach ($dato as $key => $value) {
                        foreach ($value as $v) { 
                            $IdAprendiz = $v['IdAprendiz']; 
                            $estado = $v['Estado'] ;   
                            $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                            $consulta = "SELECT * FROM aprendiz WHERE id=".$IdAprendiz;
                            $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                            foreach ($ejecutar as $opciones) {
                                $Documento = $opciones['Documento'];
                if ($estado == 'Activo') {   
                    if ($Busca == $Documento){
            ?>
                        <tr>
                            <td><?php echo $v['id'] ?></td>
                            <td>
                                <?php 
                                    $nombrec = $v['IdFecha'];                  
                                    $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                    $consulta = "SELECT * FROM fecha WHERE id=".$nombrec;
                                    $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                    foreach ($ejecutar as $opciones2) {
                                    echo $opciones2['Fecha'];
                                    }
                                ?> 
                            </td>
                            <td>
                                <?php 
                                    $nombrec = $v['IdAprendiz'];       
                                    $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                    $consulta = "SELECT * FROM aprendiz WHERE id=".$nombrec;
                                    $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                    foreach ($ejecutar as $opciones) {
                                    echo $opciones['Nombres'];
                                    echo "  ";
                                    echo $opciones['Apellidos'];
                                    }
                                ?> 
                            </td>
                            <td>
                                <?php 
                                $valor = $v['Asistencia'];
                                if ($valor == 'Asistio') {
                                    ?>
                                        <p class="btn btn-success"><i class="fa-solid fa-circle-check"></i>Asistio</p>
                                    <?php
                                }
                                if ($valor == 'Falto') {
                                    ?>
                                        <p class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>Falto</p>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
            <?php
                    }
                }
                            }
                        }
                    }
                }                         
            ?> 
            </tbody>
        </table>
        