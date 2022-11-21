<?php
    require "Public/Layouts/Header.php";
?>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                                $con = Conectar();
                                $count = current($con->query("SELECT COUNT(id) FROM aprendiz")->fetch());
                                echo $count;
                            ?>
                        </div>
                        <div class="cardName">Aprendices Registrados</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                                $con = Conectar();
                                $count = current($con->query("SELECT COUNT(id) FROM empleado")->fetch());
                                echo $count;
                            ?>
                        </div>
                        <div class="cardName">Empleados Registrados</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                                $con = Conectar();
                                $count = current($con->query("SELECT COUNT(id) FROM Fecha")->fetch());
                                echo $count;
                            ?>
                        </div>
                        <div class="cardName">Eventos Registrados</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                                $con = Conectar();
                                $count = current($con->query("SELECT COUNT(id) FROM categoria")->fetch());
                                echo $count;
                            ?>
                        </div>
                        <div class="cardName">Categorias</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="copy-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Ultimas Asistencias</h2>
                        <?php
                        echo "
                            <a href='".urlsite."?page=Rasistencia'>
                                <span class='icon'>
                                    <ion-icon name='calendar-number-outline'></ion-icon>
                                </span>
                                <span class='title'>Asistencia</span>
                            </a>
                        ";
                    ?>
                    </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Aprendiz</th>
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
                        <td><?php echo $v['id'] ?></td>
                        <td><?php 
                                $nombrec = $v['IdFecha'];                  
                                $conexion = mysqli_connect('localhost','root','','borradorproyecto') or die (mysqli_error());
                                $consulta = "SELECT * FROM fecha WHERE id=".$nombrec;
                                $ejecutar = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
                                foreach ($ejecutar as $opciones) {
                                echo $opciones['Fecha'];
                                }
                            ?> 
                        </td>
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
                </div>
            </div>
        </div>
<?php
    require "Public/Layouts/Footer.php";
?>