<?php
    header("Content-Type application/xls");
    header("Content-Disposition: attachment; filename= Informe.xls");
?>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
        <th scope="col">Estudiante</th>
        <th scope="col">Asistencia</th>
        </tr>
    </thead>
    <tbody>
    <?php
            if (!empty($dato)) {
                foreach ($dato as $key => $value) {
                    foreach ($value as $v) {
        ?>
        <tr>
            <?php $estado = $v['Estado'] ;
            if ($estado == 'Activo') {
            ?>
                <td><?php 
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
                <td><?php 
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
            <?php                    
            }
            ?>  
            </td>
        </tr>
        <?php
                    }
                }
            }
        ?>
    </tbody>
</table>
