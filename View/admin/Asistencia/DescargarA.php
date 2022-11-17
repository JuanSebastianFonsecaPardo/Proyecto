<?php
?>
<h1>Asistencia</h1>
        <p>Asistencias del aprendiz del No de documento <?php echo $Busca ?> para descargar un informe deslice hasta el final de la tabla.</p>
        <br>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Aprendiz</th>
                <th scope="col">Asistencia</th>
                <th scope="col" colspan="2">Acciones</th>
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
                                        <p class="btn btn-success"><i class="fa-solid fa-circle-check"></i></p>
                                    <?php
                                }
                                if ($valor == 'Falto') {
                                    ?>
                                        <p class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></p>
                                    <?php
                                }
                                ?>
                            </td>
                            <td><a href="<?php urlsite ?>?page=Uasistencia&Buscar=<?php echo $Busca ?>&id=<?php echo $v['id'] ?>" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Editar</a></td>
                        <td><a href="<?php urlsite ?>?page=Dasistencia&id=<?php echo $v['id'] ?>&IdFecha=<?php echo $v['IdFecha'] ?>" class="btn btn-danger"><i class="fa-solid fa-biohazard"></i> Borrar</a></td>
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
<?php
    require "Public/Layouts/Footer.php";
?>  