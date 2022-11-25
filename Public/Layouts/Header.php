<?php
    //Sesiones
    session_start();
    $varsesion = $_SESSION['Correo'];
    if ($varsesion == null || $varsesion == '') {
        header('location:'.urlsite."?page=Login");
        die();
    }

    //Conexion

    function Conectar(){
        $conn = null;
        $host = "localhost";
        $db = "borradorproyecto";
        $user = "root";
        $pwd = "";
        try {
            $conn = new PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);
        } catch (PDOException $e) {
            echo ':(Error al conectar con la base de datos)'.$e;
            exit;
        }
        return $conn;
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIVOOT</title>
    <!-- ======= Styles ====== -->
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
    <!-- Alertify -->
    <link rel="stylesheet" href="Assets/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="Assets/alertifyjs/css/alertify.min.css">
    <link rel='icon' href='Resources/Img/favicon.ico' type='image/png'/>
</head>
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Menu'>
                                <span class='icon'>
                                    <ion-icon name='basketball-outline'></ion-icon>
                                </span>
                                <span class='title'>PIVOOT</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Menu'>
                                <span class='icon'>
                                    <ion-icon name='home-outline'></ion-icon>
                                </span>
                                <span class='title'>Inicio</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Rempleado&Pagina=0'>
                                <span class='icon'>
                                    <ion-icon name='person-circle-outline'></ion-icon>
                                </span>
                                <span class='title'>Empleado</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Raprendiz&Pagina=0'>
                                <span class='icon'>
                                    <ion-icon name='people-circle-outline'></ion-icon>
                                </span>
                                <span class='title'>Estudiantes</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Rcategoria&Pagina=0'>
                                <span class='icon'>
                                    <ion-icon name='albums-outline'></ion-icon>
                                </span>
                                <span class='title'>Categoría</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Rfecha&Pagina=0'>
                                <span class='icon'>
                                <ion-icon name='alarm-outline'></ion-icon>
                                </span>
                                <span class='title'>Evento</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Colsultar'>
                                <span class='icon'>
                                <i class='fa-solid fa-user-graduate'></i>
                                </span>
                                <span class='title'>Asistencia</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=CClave'>
                                <span class='icon'>
                                <ion-icon name='construct-outline'></ion-icon>
                                </span>
                                <span class='title'>Configuraciones</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=LCerrar'>
                                <span class='icon'>
                                    <ion-icon name='log-out-outline'></ion-icon>
                                </span>
                                <span class='title'>Cerrar sesión</span>
                            </a>
                        ";
                    ?>
                </li>
            </ul>
        </div>
        <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>