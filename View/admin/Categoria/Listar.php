<?php
    require "Public/Layouts/Header.php";
    echo "<br><a class='btn btn-success' href='".urlsite."?page=Ccategoria'><i class='fa-solid fa-plus'></i> Crear Categoria</a><br><br><a class='btn' href='".urlsite."?page=Pcategoria'><i class='fa-solid fa-trash-can'></i> Papelera Categoria</a><br><br>";
    ?>
        <h1>Categoria</h1>
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
                    if ($estado == 'Activo') {
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
                        <td><a href="<?php urlsite ?>?page=Ucategoria&id=<?php echo $v['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
                        <td><a href="<?php urlsite ?>?page=Icategoria&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-biohazard"></i> Borrar</a></td>
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