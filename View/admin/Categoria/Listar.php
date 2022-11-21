<?php
    require "Public/Layouts/Header.php";
    echo "<br><a class='btn btn-success' href='".urlsite."?page=Ccategoria'><i class='fa-solid fa-plus'></i> Crear Categoria</a><a class='btn' href='".urlsite."?page=Pcategoria&Pagina=0'><i class='fa-solid fa-trash-can'></i> Papelera Categoria</a><br><br>";
     //Cantidad de registros por pagina
     $Registros_x_pagina = 5;
     //Contar lista de registro
     $con = Conectar();
     $count = current($con->query("SELECT COUNT(id) FROM categoria")->fetch());
     //Paginas totales
     $Paginas = $count/$Registros_x_pagina;
     //Redondear el numero de paginas en case que de x.3
     $Paginas = ceil($Paginas);
     //Imprimir el numero de paginas
     // echo $Paginas     
?>
        <h1>Categoria</h1>
        <form action="" method="GET">
            <input type="text" name="busqueda">
            <input type="submit" class="btn btn-primary" value="Buscar">
            <input type="hidden" name="c" value="Buscar">
        </form><br>
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
                                $nombrec = $v['IdEmpleado'];                 
                                $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                $consulta = "SELECT * FROM empleado WHERE id=".$nombrec;
                                $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                foreach ($ejecutar as $opciones) {
                                echo $opciones['Nombres'];
                                }
                            ?> 
                        </td>
                        <td><a href="<?php urlsite ?>?page=Ucategoria&id=<?php echo $v['id'] ?>&Pagina=0" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
                        <td><a href="#" class="btn btn-danger" onclick="inactivar('<?php echo $v['id'] ?>')"><i class="fa-solid fa-biohazard"></i> Inactivar</a></td>
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
         <!-- PAGINACION -->

         <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item
                <?php echo $_GET['Pagina']<=$Paginas-1 ? 'disabled' : '' ?>"">
                    <a href="<?php echo urlsite.'?page=Rcategoria&Pagina='.$_GET['Pagina']-1 ?>"  class="page-link">Anterior</a>
                </li>
                <?php for($i=0; $i<$Paginas;$i++){ ?>
                <li class="page-item 
                <?php echo $_GET['Pagina']== $i ? 'active' : '' ?>">
                    <a href="<?php urlsite?>?page=Rcategoria&Pagina=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
                </li>
                <?php } ?>
                <li class="page-item
                <?php echo $_GET['Pagina']>=$Paginas-1 ? 'disabled' : '' ?>">
                    <a href="<?php echo urlsite.'?page=Rcategoria&Pagina='.$_GET['Pagina']+1 ?>" class="page-link">Siguiente</a>
                </li>
            </ul>
        </nav>

        <!-- Alertas -->

        <!-- INACTIVAR -->
        <script type="text/javascript">
            function inactivar(id){
                alertify.confirm('PIVOOT',"Desea inactivar la categoria?",
                function(){
                    alertify.alert('PIVOOT',"Si desea activar la categoria otra vez tendra que ir a la papelera.", function(){
                        window.location = "<?php urlsite?>?page=Icategoria&id="+id;
                    });
                    alertify.success('Inactivado Correctamente');
                },
                function(){
                    alertify.error('Cancelado');
                });
            }
        </script>
    <?php
    require "Public/Layouts/Footer.php";
?>  