<?php
    require "Public/Layouts/Header.php";
    ?>
        <h1>Papelera</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Description</th>
                <th scope="col">Empleado</th>
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
                        <td><?php echo $v['Nombre'] ?></td>
                        <td><?php echo $v['Descripcion'] ?></td>
                        <td><?php 
                                echo $v['IdEmpleado'];
                                $nombrec = $v['IdEmpleado'];
                                echo " - ";                    
                                $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                $consulta = "SELECT * FROM empleado WHERE id=".$nombrec;
                                $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                foreach ($ejecutar as $opciones) {
                                echo $opciones['Nombres'];
                                }
                            ?> 
                        </td>
                        <td><a href="<?php urlsite ?>?page=Acategoria&id=<?php echo $v['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-arrow-rotate-left"></i> Restaurar</a></td>
                        <td><a href="<?php urlsite ?>?page=Dcategoria&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Borrar</a></td>
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