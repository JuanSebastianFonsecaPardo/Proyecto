<?php
    require "Public/Layouts/Header.php";
    echo "<br><a class='btn btn-success' href='".urlsite."?page=Cfecha'><i class='fa-solid fa-plus'></i> Crear Evento</a><br><br>";
    //Cantidad de registros por pagina
    $Registros_x_pagina = 5;
    //Contar lista de registro
    $con = Conectar();
    $count = current($con->query("SELECT COUNT(id) FROM Fecha")->fetch());
    //Paginas totales
    $Paginas = $count/$Registros_x_pagina;
    //Redondear el numero de paginas en case que de x.3
    $Paginas = ceil($Paginas);
    //Imprimir el numero de paginas
    // echo $Paginas
?>  
        <h1>Eventos</h1>

        <form action="" method="GET">
            <input type="date" name="busqueda">
            <input type="submit" class="btn btn-primary" value="Buscar">
            <input type="hidden" name="f" value="Buscar">
        </form>

        <br><br>
    
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Categoría</th>
                <th scope="col">Tomar Asistencia</th>
                <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody id="datos_buscados">
                <?php
                    if (!empty($dato)) {
                        foreach ($dato as $key => $value) {
                            foreach ($value as $v) {
                ?>
                <tr>
                        <td><?php echo $v['id'] ?></td>
                        <td><?php echo $v['Nombre']?></td>
                        <td><?php echo $v['Fecha'] ?></td>
                        <td>
                            <?php 
                                $nombrec = $v['IdCategoria'];               
                                $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                $consulta = "SELECT * FROM categoria WHERE id=".$nombrec;
                                $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                foreach ($ejecutar as $opciones) {
                                echo $opciones['Nombre'];
                                }
                            ?> 
                        </td>
                        <td><a href="<?php urlsite ?>?page=Casistencia&IdCategoria=<?php echo $v['IdCategoria'] ?>&Fecha=<?php echo $v['id'] ?>" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> Registrar Asistencias</a></td>
                        <td><a href="<?php urlsite ?>?page=Rasistencia&id=<?php echo $v['id'] ?>&IdCategoria=<?php echo $v['IdCategoria'] ?>" class="btn btn-primary"><i class="fa-solid fa-file"></i> Descargar Informe</a></td>
                        <td><a href="<?php urlsite ?>?page=Ufecha&id=<?php echo $v['id'] ?>&Pagina=0" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
                        <td><a href="<?php urlsite ?>?page=Dfecha&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-biohazard"></i> Borrar</a></td>
                    <?php                    
                    }
                    ?>  
                    </td>
                </tr>
                <?php
                            
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
                    <a href="<?php echo urlsite.'?page=Rfecha&Pagina='.$_GET['Pagina']-1 ?>"  class="page-link">Anterior</a>
                </li>
                <?php for($i=0; $i<$Paginas;$i++){ ?>
                <li class="page-item 
                <?php echo $_GET['Pagina']== $i ? 'active' : '' ?>">
                    <a href="<?php urlsite?>?page=Rfecha&Pagina=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
                </li>
                <?php } ?>
                <li class="page-item
                <?php echo $_GET['Pagina']>=$Paginas-1 ? 'disabled' : '' ?>">
                    <a href="<?php echo urlsite.'?page=Rfecha&Pagina='.$_GET['Pagina']+1 ?>" class="page-link">Siguiente</a>
                </li>
            </ul>
        </nav>
    <?php
    require "Public/Layouts/Footer.php";
?>  