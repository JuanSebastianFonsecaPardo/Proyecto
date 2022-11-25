<?php
    require "Public/Layouts/Header.php";
    echo "<br><a href='".urlsite."?page=CargaMasivaEmpleado' class='btn btn-success'><i class='fa-solid fa-file-excel'></i> Carga Masiva</a> <a class='btn btn-success' href='".urlsite."?page=Cempleado'><i class='fa-solid fa-plus'></i> Crear empleado</a><a class='btn' href='".urlsite."?page=Pempleado&Pagina=0'><i class='fa-solid fa-trash-can'></i> Papelera Empleado</a>";

    
    //Cantidad de registros por pagina
    $Registros_x_pagina = 5;
    //Contar lista de registro
    $con = Conectar();
    $count = current($con->query("SELECT COUNT(id) FROM empleado WHERE Estado = 'Activo' ")->fetch());
    //Paginas totales
    $Paginas = $count/$Registros_x_pagina;
    //Redondear el numero de paginas en case que de x.3
    $Paginas = ceil($Paginas);
    //Imprimir el numero de paginas
    // echo $Paginas

?>
        <h1>Empleados</h1>
        <form action="" method="GET">
            <input type="number" name="busqueda">
            <input type="submit" class="btn btn-primary" value="Buscar">
            <input type="hidden" name="m" value="Buscar">
        </form><br>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Documento</th>
                <th scope="col">TipoDocumento</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Rol</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>
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
                        <td><?php echo $v['Rol'] ?></td>
                        <td><?php echo $v['Email'] ?></td>
                        <td><?php echo $v['Telefono'] ?></td>
                        <td><a href="<?php urlsite ?>?page=Uempleado&id=<?php echo $v['id'] ?>&Pagina=0 " class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
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
                    <a href="<?php echo urlsite.'?page=Rempleado&Pagina='.$_GET['Pagina']-1 ?>"  class="page-link">Anterior</a>
                </li>
                <?php for($i=0; $i<$Paginas;$i++){ ?>
                <li class="page-item 
                <?php echo $_GET['Pagina']== $i ? 'active' : '' ?>">
                    <a href="<?php urlsite?>?page=Rempleado&Pagina=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
                </li>
                <?php } ?>
                <li class="page-item
                <?php echo $_GET['Pagina']>=$Paginas-1 ? 'disabled' : '' ?>">
                    <a href="<?php echo urlsite.'?page=Rempleado&Pagina='.$_GET['Pagina']+1 ?>" class="page-link">Siguiente</a>
                </li>
            </ul>
        </nav>

        <!-- Alertas -->

        <!-- INACTIVAR -->
        <script type="text/javascript">
            function inactivar(id){
                alertify.confirm('PIVOOT',"Desea inactivar el empleado?",
                function(){
                    alertify.alert('PIVOOT',"Si desea activar el empleado otra vez tendra que ir a la papelera.", function(){
                        window.location = "<?php urlsite?>?page=Iempleado&id="+id;
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