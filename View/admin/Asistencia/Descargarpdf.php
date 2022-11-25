<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe asistencia</title>
    <link rel="stylesheet" href="Resources/Css/DiseñoPDF.css">
    <link rel="stylesheet" href="Resources/Css/Menu.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.min.css">
    <!-- Paginador -->
    <link rel="stylesheet" href="Assets/Paginador/css/bootstrap-theme.css">
    <link rel="stylesheet" href="Assets/Paginador/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Paginador/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Assets/Paginador/css/bootstrap.min.css">
</head>
<body>
<div class="contenedor"> 
    <DIV class="navbar">
        <img src="Resources/Img/Logo-Lado.png" class="Logo">
        <h1>INFORME DE ASISTENCIAS.</h1>
    </DIV>
    <p>Asistencias del Estudiante del No de documento <?php echo $Busca ?>.</p>
    <br> <table class="table table-striped table-bordered">
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
        <a href="<?php urlsite ?>?page=Colsultar" class="btn btn-danger"><i class="fa-solid fa-person-running"></i> Salir</a>
        <button name="imprimir" value="imprimir" onClick="javascript:imprimir();" class="btn btn-primary">Imprimir</button>
        </div> 
        <script type="text/javascript">
            function imprimir(){
                    window.print()
                }
        </script>
</body>
</html>