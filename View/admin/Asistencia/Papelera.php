<?php
    require "Public/Layouts/Header.php";
    ?>
        <h1>Papelera</h1>
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
                ?>
                <tr>
                    <?php $estado = $v['Estado'] ;
                    if ($estado == 'Inactivo') {
                    ?>
                        <td><?php echo $v['id'] ?></td>
                        <td><?php 
                                echo $v['IdFecha'];
                                $nombrec = $v['IdFecha'];
                                echo " - ";                    
                                $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                $consulta = "SELECT * FROM fecha WHERE id=".$nombrec;
                                $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                foreach ($ejecutar as $opciones) {
                                echo $opciones['Fecha'];
                                }
                            ?> 
                        </td>
                        <td><?php 
                                echo $v['IdAprendiz'];
                                $nombrec = $v['IdAprendiz'];
                                echo " - ";                    
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
                            if ($valor == '1') {
                                ?>
                                    <p class="btn btn-success"><i class="fa-solid fa-circle-check"></i></p>
                                <?php
                            }
                            if ($valor == '0') {
                                ?>
                                    <p class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></p>
                                <?php
                            }
                            ?>
                        </td>
                        <td><a href="<?php urlsite ?>?page=Aasistencia&id=<?php echo $v['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-arrow-rotate-left"></i> Restaurar</a></td>
                        <td><a href="<?php urlsite ?>?page=Dasistencia&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Borrar</a></td>
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
    <?php
    require "Public/Layouts/Footer.php";
?>  