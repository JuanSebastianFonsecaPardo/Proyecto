<?php 

$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "borradorproyecto";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

$tipo       = $_FILES['dataEmpleado']['type'];
$tamanio    = $_FILES['dataEmpleado']['size'];
$archivotmp = $_FILES['dataEmpleado']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);

        $Rol            = !empty($datos[0]) ? ($datos[0]) : ''; 
        $TipoD          = !empty($datos[1]) ? ($datos[1]) : ''; 
        $Documento      = !empty($datos[2]) ? ($datos[2]) : ''; 
        $Nombre         = !empty($datos[3]) ? ($datos[3]) : '';
        $Apellido       = !empty($datos[4]) ? ($datos[4]) : '';
        $Email          = !empty($datos[5]) ? ($datos[5]) : '';
        $Telefono       = !empty($datos[6]) ? ($datos[6]) : '';    
        $Estado         = !empty($datos[7]) ? ($datos[7]) : '';
        $Pass           = !empty($datos[8]) ? ($datos[8]) : '';  
    
        $insertar = "INSERT INTO empleado ( 
            Rol,
            TipoDocumento,
            Documento,
            Nombres,
            Apellidos,
            Email,
            Telefono,
            Estado,
            password
        ) VALUES(
            '$Rol',
            '$TipoD',
            '$Documento',
            '$Nombre',
            '$Apellido',
            '$Email',
            '$Telefono',
            '$Estado',
            md5('$Pass')
        )";
        mysqli_query($con, $insertar);
    }
    echo '<div>'.$i.").".$linea.'</div>';
    $i++;
}
echo '<p>Total de registros = '.$cantidad_regist_agregados.'</p>';
echo "<script>
    window.alert('La carga masiva fue cargada correctamente.');
    window.location = '../../../?page=Rempleado&Pagina=0';
    </script>";
?>