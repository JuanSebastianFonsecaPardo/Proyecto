<?php

    require "Public/Layouts/Header.php";
    echo "<br><a class='btn btn-success' href='".urlsite."?page=Caprendiz'><i class='fa-solid fa-plus'></i> Crear Aprendiz</a><br><br><a class='btn' href='".urlsite."?page=Paprendiz'><i class='fa-solid fa-trash-can'></i> Papelera Aprendiz</a><br><br>";
    ?>
        <h1>Aprendiz</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Documento</th>
                <th scope="col">TipoDocumento</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Categoria</th>
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
                        <td><?php echo $v['Documento'] ?></td>
                        <td><?php echo $v['TipoDocumento'] ?></td>
                        <td><?php echo $v['Nombres'] ?></td>
                        <td><?php echo $v['Apellidos'] ?></td>
                        <td><?php echo $v['Email'] ?></td>
                        <td><?php echo $v['Telefono'] ?></td>
                        <td><?php 
                                $nombrec = $v['Categoria_Id'];               
                                $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                $consulta = "SELECT * FROM categoria WHERE id=".$nombrec;
                                $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                foreach ($ejecutar as $opciones) {
                                echo $opciones['Nombre'];
                                }
                            ?> 
                        </td>
                        <td><a href="<?php urlsite ?>?page=Uaprendiz&id=<?php echo $v['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
                        <td><a href="<?php urlsite ?>?page=Iaprendiz&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-biohazard"></i> Borrar</a></td>
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