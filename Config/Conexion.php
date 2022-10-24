<?php
    include "Config/Env.php";
    $HOST = "localhost";
    $USER = "root";
    $PASS = "";
    $BASE = "borradorproyecto";
    $conexion = mysqli_connect($HOST,$USER,$PASS,$BASE) or die (mysqli_error());
?>