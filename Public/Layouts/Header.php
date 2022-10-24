<?php
    //Sesiones
    session_start();
    $varsesion = $_SESSION['Correo'];
    if ($varsesion == null || $varsesion == '') {
        header('location:'.urlsite."?page=Login");
        die();
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
                            <a href='".urlsite."?page=Rempleado'>
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
                            <a href='".urlsite."?page=Raprendiz'>
                                <span class='icon'>
                                    <ion-icon name='people-circle-outline'></ion-icon>
                                </span>
                                <span class='title'>Aprendices</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Rcategoria'>
                                <span class='icon'>
                                    <ion-icon name='albums-outline'></ion-icon>
                                </span>
                                <span class='title'>Categoria</span>
                            </a>
                        ";
                    ?>
                </li>
                <li>
                    <?php
                        echo "
                            <a href='".urlsite."?page=Rfecha'>
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
            <div class="user">
                <img src="Resources/img/customer01.jpg" alt="">
            </div>
        </div>